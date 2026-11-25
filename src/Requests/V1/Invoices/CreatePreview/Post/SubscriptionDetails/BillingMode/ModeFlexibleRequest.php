<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingMode;

/**
 * flexible_params
 */
final class ModeFlexibleRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingMode\Flexible\ProrationDiscountsEnum $proration_discounts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'proration_discounts' => is_string($value) ? $this->proration_discounts = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingMode\Flexible\ProrationDiscountsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
