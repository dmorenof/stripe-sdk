<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionItemBillingThresholds
 */
final class ItemBillingThresholds extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Usage threshold that triggers the subscription to create an invoice
     */
    public ?int $usage_gte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'usage_gte' => $value === null || is_int($value) ? $this->usage_gte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
