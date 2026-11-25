<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * SubscriptionsResourceSubscriptionPresentmentDetails
 */
final class SubscriptionPresentmentDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'presentment_currency',
    ];

    protected const array VALIDATION = [
        'presentment_currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Currency used for customer payments.
     */
    public string $presentment_currency {
        set {
            $this->assigning('presentment_currency', $value);
            $this->presentment_currency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'presentment_currency' => is_string($value) ? $this->presentment_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
