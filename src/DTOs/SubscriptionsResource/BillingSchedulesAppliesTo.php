<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Billing Schedule Applies To
 *
 * Represents the entities that the billing schedule applies to.
 */
final class BillingSchedulesAppliesTo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The billing schedule will apply to the subscription item with the given price ID.
     */
    public ?\StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesAppliesTo\PriceDTO $price;
    /**
     * Controls which subscription items the billing schedule applies to.
     */
    public \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesAppliesTo\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SubscriptionsResource\BillingSchedulesAppliesTo\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
