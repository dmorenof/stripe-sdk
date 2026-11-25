<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post\SubscriptionData;

/**
 * billing_mode
 */
final class BillingModeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Quotes\Post\SubscriptionData\BillingMode\ModeFlexibleRequest $flexible;
    public \StripeSDK\Enums\V1\Quotes\Post\SubscriptionData\BillingMode\ModeTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Quotes\Post\SubscriptionData\BillingMode\ModeTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
