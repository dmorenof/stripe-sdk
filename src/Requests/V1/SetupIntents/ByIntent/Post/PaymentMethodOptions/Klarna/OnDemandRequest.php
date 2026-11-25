<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Klarna;

/**
 * on_demand_param
 */
final class OnDemandRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $average_amount;
    public int $maximum_amount;
    public int $minimum_amount;
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Klarna\OnDemand\PurchaseIntervalEnum $purchase_interval;
    public int $purchase_interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_amount' => is_int($value) ? $this->average_amount = $value : parent::assignMember($name, $value),
            'maximum_amount' => is_int($value) ? $this->maximum_amount = $value : parent::assignMember($name, $value),
            'minimum_amount' => is_int($value) ? $this->minimum_amount = $value : parent::assignMember($name, $value),
            'purchase_interval' => is_string($value) ? $this->purchase_interval = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\Klarna\OnDemand\PurchaseIntervalEnum::from($value) : parent::assignMember($name, $value),
            'purchase_interval_count' => is_int($value) ? $this->purchase_interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
