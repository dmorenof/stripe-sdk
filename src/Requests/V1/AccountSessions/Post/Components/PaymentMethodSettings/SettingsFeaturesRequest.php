<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\PaymentMethodSettings;

/**
 * payment_method_settings_features_param
 */
final class SettingsFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $disable_stripe_user_authentication;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
