<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedFinancialAccountFeatures
 */
final class FinancialAccountFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'disable_stripe_user_authentication',
        'external_account_collection',
        'send_money',
        'transfer_balance',
    ];

    /**
     * Whether Stripe user authentication is disabled. This value can only be `true` for accounts where `controller.requirement_collection` is `application` for the account. The default value is the opposite of the `external_account_collection` value. For example, if you don't set `external_account_collection`, it defaults to `true` and `disable_stripe_user_authentication` defaults to `false`.
     */
    public bool $disable_stripe_user_authentication;
    /**
     * Whether external account collection is enabled. This feature can only be `false` for accounts where you’re responsible for collecting updated information when requirements are due or change, like Custom accounts. The default value for this feature is `true`.
     */
    public bool $external_account_collection;
    /**
     * Whether to allow sending money.
     */
    public bool $send_money;
    /**
     * Whether to allow transferring balance.
     */
    public bool $transfer_balance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            'external_account_collection' => is_bool($value) ? $this->external_account_collection = $value : parent::assignMember($name, $value),
            'send_money' => is_bool($value) ? $this->send_money = $value : parent::assignMember($name, $value),
            'transfer_balance' => is_bool($value) ? $this->transfer_balance = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
