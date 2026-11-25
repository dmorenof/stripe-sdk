<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\Post\BillingSchedulesItem;

/**
 * billing_schedules_applies_to
 */
final class AppliesToRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Enums\V1\Subscriptions\Post\BillingSchedulesItem\AppliesToItem\ToItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Subscriptions\Post\BillingSchedulesItem\AppliesToItem\ToItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
