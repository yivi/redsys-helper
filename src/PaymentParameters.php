<?php

declare(strict_types=1);

namespace Yivoff\Redsys;


interface PaymentParameters
{

    public function getPaymentId(): string;

    public function getPayload(): string;

}
