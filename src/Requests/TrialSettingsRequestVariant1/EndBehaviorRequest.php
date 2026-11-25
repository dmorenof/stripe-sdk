<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TrialSettingsRequestVariant1;

/**
 * end_behavior
 */
final class EndBehaviorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'missing_payment_method',
    ];

    public \StripeSDK\Enums\TrialSettingsRequestVariant1\EndBehavior\PaymentMethodEnum $missing_payment_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'missing_payment_method' => is_string($value) ? $this->missing_payment_method = \StripeSDK\Enums\TrialSettingsRequestVariant1\EndBehavior\PaymentMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
