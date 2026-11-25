<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsClient
 */
final class FlowsAmountDetailsClient extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\FlowsAmountDetailsClientResourceTip $tip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tip' => $value instanceof \stdClass ? $this->tip = new \StripeSDK\DTOs\Payment\FlowsAmountDetailsClientResourceTip($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
