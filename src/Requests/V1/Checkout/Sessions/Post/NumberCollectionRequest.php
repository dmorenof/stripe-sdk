<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * phone_number_collection_params
 *
 * Controls phone number collection settings for the session.
 *
 * We recommend that you review your privacy policy and check with your legal contacts
 * before using this feature. Learn more about [collecting phone numbers with Checkout](https://docs.stripe.com/payments/checkout/phone-numbers).
 */
final class NumberCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
