<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsKlarnaRequestVariant1SubscriptionsRequestVariant1Item;

/**
 * subscription_next_billing_param
 */
final class NextBillingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'date',
    ];

    protected const array VALIDATION = [
        'date' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $date {
        set {
            $this->assigning('date', $value);
            $this->date = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
