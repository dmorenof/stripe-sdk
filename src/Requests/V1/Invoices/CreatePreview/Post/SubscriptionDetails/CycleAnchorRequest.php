<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails;

/**
 * billing_cycle_anchor_param
 */
final class CycleAnchorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Format: unix-time
     */
    public int $timestamp;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingCycleAnchor\AnchorTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingCycleAnchor\AnchorTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
