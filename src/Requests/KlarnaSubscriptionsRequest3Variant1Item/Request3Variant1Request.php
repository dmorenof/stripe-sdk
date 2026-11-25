<?php

declare(strict_types=1);

namespace StripeSDK\Requests\KlarnaSubscriptionsRequest3Variant1Item;

/**
 * setup_intent_subscription_param
 */
final class Request3Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'interval',
        'next_billing',
        'reference',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 255,
        ],
        'reference' => [
            'maxLength' => 255,
        ],
    ];

    public \StripeSDK\Enums\KlarnaSubscriptionsRequest3Variant1Item\KlarnaSubscriptionsRequest3Variant1ItemIntervalEnum $interval;
    public int $interval_count;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\KlarnaSubscriptionsRequest3Variant1Item\NextBillingRequest $next_billing;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\KlarnaSubscriptionsRequest3Variant1Item\KlarnaSubscriptionsRequest3Variant1ItemIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
