<?php declare(strict_types=1);


namespace Yivoff\Redsys;

use Yivoff\Redsys\Enum\CardBrand;
use Yivoff\Redsys\Enum\Currency;
use Yivoff\Redsys\Exception\InvalidPayload;

final class ResponseParameters implements PaymentParameters
{

    public function __construct(
        public readonly string $orderId,
        public readonly string $fullPayload,
        public readonly string $signature,
        public readonly \DateTimeImmutable $datetime,
        public readonly ?CardBrand $cardBrand = null,
        public readonly ?int $amount = null,
        public readonly ?Currency $currency = null,
        public readonly ?int $responseCode = null,
        public readonly ?bool $secure = null,
        public readonly ?string $errorCode = null,
        public readonly ?int $amountEuro = null
    ) {
    }

    public static function createFromResponse(string $payload, string $signature): self
    {
        $decodedPayload = base64_decode($payload);

        if ($decodedPayload === false) {
            throw new InvalidPayload('Received payload contains characters outside B64');
        }

        $arrayPayload = json_decode($decodedPayload, true);

        if ($arrayPayload === false) {
            throw new InvalidPayload('Received payload could not be JSON decoded');
        }

        $decodedPayload = array_change_key_case($arrayPayload, CASE_UPPER);

        $orderId = $decodedPayload['DS_ORDER'] ?? false;

        if ($orderId === false) {
            throw new InvalidPayload('Received payload does not include DS_ORDER');
        }

        $cardBrand = $arrayPayload['DS_CARD_BRAND'] ?? null;
        if ($cardBrand !== null) {
            $cardBrand = CardBrand::tryFrom((int)$cardBrand);
        }

        return new ResponseParameters(
            orderId:      $orderId,
            fullPayload:  $payload,
            signature:    $signature,
            datetime:     new \DateTimeImmutable(),
            cardBrand:    $cardBrand,
            amount:       $arrayPayload['DS_AMOUNT'] ?? 0,
            currency:     Currency::tryFrom((int)$arrayPayload['DS_CURRENCY']),
            responseCode: array_key_exists('DS_RESPONSE', $arrayPayload) ? (int)$arrayPayload['DS_RESPONSE'] : null,
            secure:       ($arrayPayload['DS_SECUREPAYMENT'] ?? '0') === 1,
            errorCode:    $arrayPayload['DS_ERRORCODE'] ?? null,
            amountEuro:   $arrayPayload['DS_AMOUNT_EURO']
        );
    }

    public function getPaymentId(): string
    {
        return $this->orderId;
    }

    public function getPayload(): string
    {
        return strtr($this->fullPayload, '+/', '-_');
    }

    public function getSignature(): string
    {
        return strtr($this->signature, '-_', '+/');
    }


}
