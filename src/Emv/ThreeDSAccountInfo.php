<?php declare(strict_types=1);


namespace Yivoff\Redsys\Emv;


class ThreeDSAccountInfo implements \JsonSerializable
{

    public function __construct(
        public readonly int $accountAgeIndicator, // chAccAgeInd
        public readonly ?string $accountAge = null,
        public readonly ?int $accountChangeAgeIndicator = null,
        public readonly ?string $accountChangeAge = null,
        public readonly ?int $passwordChangeAgeIndicator = null,
        public readonly ?string $passwordChangeAge = null,
        public readonly ?int $purchaseCount = null,
        public readonly ?string $provisionAttemptsDay = null,
        public readonly ?string $txnActivityDay = null,
        public readonly ?string $txnActivityYear = null,
        public readonly ?string $paymentAccAge = null,
        public readonly ?string $paymentAccInd = null,
        public readonly ?string $shipAddressUsage = null,
        public readonly ?string $shipAddressUsageInd = null,
        public readonly ?string $shipNameIndicator = null,
        public readonly ?string $suspiciousAccActivity = null,
    ) {
    }

    /**
     * Sillines so that we remove empty fields from payload, just in case
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_filter((array)$this, fn($e) => $e !== null);
    }

}
