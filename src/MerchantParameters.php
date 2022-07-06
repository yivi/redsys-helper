<?php declare(strict_types=1);

namespace Yivoff\Redsys;

use Yivoff\Redsys\Emv\ThreeDSData;
use Yivoff\Redsys\Enum\Currency;
use Yivoff\Redsys\Enum\PaymentMethod;
use Yivoff\Redsys\Enum\TransactionType;

class MerchantParameters
{

    /**
     * @param int              $amount             DS_MERCHANT_AMOUNT - Valor en céntimos 1234 = 12.34€
     * @param Currency         $currency           DS_MERCHANT_CURRENCY - Código numérico de la moneda según el ISO-4217, ver tabla de monedas.
     * @param int              $merchantCode       DS_MERCHANT_MERCHANTCODE - Código FUC asignado al comercio.(Nº de comercio)
     * @param string           $orderId            DS_MERCHANT_ORDER - Id de compra (\d{4}[a-zA-Z\d]{0,8})
     * @param int              $terminal           DS_MERCHANT_TERMINAL
     * @param TransactionType  $transactionType    DS_MERCHANT_TRANSACTIONTYPE
     * @param PaymentMethod    $paymentMethod      DS_MERCHANT_PAYMETHODS
     * @param string|null      $productDescription DS_MERCHANT_PRODUCTDESCRIPTION - Longitud máxima 125 chars
     * @param array|null       $merchantData       DS_MERCHANT_MERCHANTDATA - Cadena de datos que no procesará el TPV-Virtual y se devolverán de la misma forma en la respuesta
     * @param string|null      $merchantName       Longitud máxima 25 chars
     * @param string|null      $urlNotification    Longitud máxima 250 chars
     * @param string|null      $urlSuccess         DS_MERCHANT_URLOK Longitud máxima 250 chars
     * @param string|null      $urlFailure         DS_MERCHANT_URLKO Longitud máxima 250 chars
     * @param ThreeDSData|null $emv3dsData         DS_MERCHANT_EMV3DS
     */
    public function __construct(
        public readonly int $amount,
        public readonly int $merchantCode,
        public readonly string $orderId,
        public readonly int $terminal,
        public readonly TransactionType $transactionType,
        public readonly Currency $currency = Currency::EuroEur,
        public readonly PaymentMethod $paymentMethod = PaymentMethod::CreditCard,
        public readonly ?string $productDescription = null,
        public readonly ?array $merchantData = null,
        public readonly ?string $merchantName = null,
        public readonly ?string $urlSuccess = null,
        public readonly ?string $urlFailure = null,
        public readonly ?string $urlNotification = null,
        public readonly ?ThreeDSData $emv3dsData = null
    ) {
    }

    public function redsysPayload(): string
    {
        return base64_encode(
            json_encode(
                $this->toArray()
            )
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'DS_MERCHANT_AMOUNT'             => $this->amount,
            'DS_MERCHANT_CURRENCY'           => $this->currency->value,
            'DS_MERCHANT_MERCHANTCODE'       => $this->merchantCode,
            'DS_MERCHANT_ORDER'              => $this->orderId,
            'DS_MERCHANT_TERMINAL'           => $this->terminal,
            'DS_MERCHANT_TRANSACTIONTYPE'    => $this->transactionType->value,
            'DS_MERCHANT_PAYMETHODS'         => $this->paymentMethod->value,
            'DS_MERCHANT_PRODUCTDESCRIPTION' => $this->productDescription,
            'DS_MERCHANT_MERCHANTDATA'       => $this->merchantData,
            'DS_MERCHANT_MERCHANTNAME'       => $this->merchantName,
            'DS_MERCHANT_MERCHANTURL'        => $this->urlNotification,
            'DS_MERCHANT_URLOK'              => $this->urlSuccess,
            'DS_MERCHANT_URLKO'              => $this->urlFailure,
            'DS_MERCHANT_EMV3DS'             => $this->emv3dsData,
        ], fn($e) => $e !== null);
    }

}
