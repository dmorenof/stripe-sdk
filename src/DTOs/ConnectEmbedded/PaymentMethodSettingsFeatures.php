<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedPaymentMethodSettingsFeatures
 */
final class PaymentMethodSettingsFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'disable_stripe_user_authentication',
    ];

    /**
     * Whether Stripe user authentication is disabled. This value can only be `true` for accounts where `controller.requirement_collection` is `application` for the account. This is `false` by default.
     */
    public bool $disable_stripe_user_authentication;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
