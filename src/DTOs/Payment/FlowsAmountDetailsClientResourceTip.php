<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAmountDetailsClientResourceTip
 */
final class FlowsAmountDetailsClientResourceTip extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Portion of the amount that corresponds to a tip.
     */
    public int $amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
