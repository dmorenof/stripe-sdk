<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionBillingThresholds
 */
final class BillingThresholds extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Monetary threshold that triggers the subscription to create an invoice
     */
    public ?int $amount_gte;
    /**
     * Indicates if the `billing_cycle_anchor` should be reset when a threshold is reached. If true, `billing_cycle_anchor` will be updated to the date/time the threshold was last reached; otherwise, the value will remain unchanged. This value may not be `true` if the subscription contains items with plans that have `aggregate_usage=last_ever`.
     */
    public ?bool $reset_billing_cycle_anchor;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_gte' => $value === null || is_int($value) ? $this->amount_gte = $value : parent::assignMember($name, $value),
            'reset_billing_cycle_anchor' => $value === null || is_bool($value) ? $this->reset_billing_cycle_anchor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
