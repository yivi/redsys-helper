<?php

declare(strict_types=1);

namespace Yivoff\Redsys;

use function base64_encode;
use function hash_hmac;
use function openssl_encrypt;
use function str_pad;
use function strlen;

final class Helper
{

    public function __construct(private readonly string $sha256Key)
    {
    }

    public function getSignature(PaymentParameters $parameters): string
    {
        $merchantKey = base64_decode($this->sha256Key);

        $idLen    = strlen($parameters->getPaymentId());
        $padding  = $idLen % 8 !== 0 ? 8 - $idLen % 8 : 0;
        $paddedId = str_pad($parameters->orderId, $idLen + $padding, "\0");

        $cypheredKey = openssl_encrypt($paddedId, "DES-EDE3-CBC", $merchantKey, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, "\0\0\0\0\0\0\0\0");

        return base64_encode(hash_hmac('sha256', $parameters->getPayload(), $cypheredKey, true));
    }

}
