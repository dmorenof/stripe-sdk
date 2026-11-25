<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\AccountOnboarding;

/**
 * account_features_param
 */
final class OnboardingFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $disable_stripe_user_authentication;
    public bool $external_account_collection;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            'external_account_collection' => is_bool($value) ? $this->external_account_collection = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
