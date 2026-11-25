<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BillingThresholdsRequest14Variant1;

/**
 * billing_thresholds_param
 */
final class Request14Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount_gte;
    public bool $reset_billing_cycle_anchor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_gte' => is_int($value) ? $this->amount_gte = $value : parent::assignMember($name, $value),
            'reset_billing_cycle_anchor' => is_bool($value) ? $this->reset_billing_cycle_anchor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
