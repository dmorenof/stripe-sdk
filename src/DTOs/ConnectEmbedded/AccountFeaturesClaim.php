<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedAccountFeaturesClaim
 */
final class AccountFeaturesClaim extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'disable_stripe_user_authentication',
        'external_account_collection',
    ];

    /**
     * Whether Stripe user authentication is disabled. This value can only be `true` for accounts where `controller.requirement_collection` is `application` for the account. The default value is the opposite of the `external_account_collection` value. For example, if you don't set `external_account_collection`, it defaults to `true` and `disable_stripe_user_authentication` defaults to `false`.
     */
    public bool $disable_stripe_user_authentication;
    /**
     * Whether external account collection is enabled. This feature can only be `false` for accounts where you’re responsible for collecting updated information when requirements are due or change, like Custom accounts. The default value for this feature is `true`.
     */
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
