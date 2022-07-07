<?php declare(strict_types=1);


namespace Yivoff\Redsys\Emv;


/**
 * All this should be gathered client-side
 */
class ThreeDSData implements \JsonSerializable
{

    public function __construct(
        public readonly ?string $browserIp = null,
        public readonly ?string $browserAcceptHeader = null,
        public readonly ?string $browserColorDepth = null,
        public readonly ?bool $browserJavaEnabled = null,
        public readonly ?string $browserLanguage = null,
        public readonly ?string $browserScreenWidth = null,
        public readonly ?string $browserScreenHeight = null,
        public readonly ?string $browserTimezone = null,
        public readonly ?string $browserUserAgent = null,
        public readonly ?string $notificationUrl = null,
        public readonly ?string $protocolVersion = null,
        public readonly ?string $threeDSCompInd = null,
        public readonly ?string $threeDSInfo = null,
        public readonly ?string $threeDSServerTransID = null,
        public readonly ?string $userEmailAddress = null,
        public readonly ?ThreeDSAccountInfo $emv3dsAccountInfo = null
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
