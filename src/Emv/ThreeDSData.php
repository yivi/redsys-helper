<?php declare(strict_types=1);


namespace Yivoff\Redsys\Emv;


/**
 * All this should be gathered client-side
 */
class ThreeDSData
{

    public function __construct(
        public readonly string $browserIp,
        public readonly string $browserAcceptHeader,
        public readonly string $browserColorDepth,
        public readonly bool $browserJavaEnabled,
        public readonly string $browserLanguage,
        public readonly string $browserScreenWidth,
        public readonly string $browserScreenHeight,
        public readonly string $browserTimezone,
        public readonly string $browserUserAgent,
        public readonly string $notificationUrl,
        public readonly string $protocolVersion,
        public readonly string $threeDSCompInd,
        public readonly string $threeDSInfo,
        public readonly string $threeDSServerTransID,
        public readonly ?string $userEmailAddress = null,
        public readonly ?ThreeDSAccountInfo $emv3dsAccountInfo = null
    ) {
    }

}
