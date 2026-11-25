<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedPayoutsFeatures
 */
final class PayoutsFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'disable_stripe_user_authentication',
        'edit_payout_schedule',
        'external_account_collection',
        'instant_payouts',
        'standard_payouts',
    ];

    /**
     * Whether Stripe user authentication is disabled. This value can only be `true` for accounts where `controller.requirement_collection` is `application` for the account. The default value is the opposite of the `external_account_collection` value. For example, if you don't set `external_account_collection`, it defaults to `true` and `disable_stripe_user_authentication` defaults to `false`.
     */
    public bool $disable_stripe_user_authentication;
    /**
     * Whether to allow payout schedule to be changed. Defaults to `true` when `controller.losses.payments` is set to `stripe` for the account, otherwise `false`.
     */
    public bool $edit_payout_schedule;
    /**
     * Whether external account collection is enabled. This feature can only be `false` for accounts where you’re responsible for collecting updated information when requirements are due or change, like Custom accounts. The default value for this feature is `true`.
     */
    public bool $external_account_collection;
    /**
     * Whether to allow creation of instant payouts. The default value is `enabled` when Stripe is responsible for negative account balances, and `use_dashboard_rules` otherwise.
     */
    public bool $instant_payouts;
    /**
     * Whether to allow creation of standard payouts. Defaults to `true` when `controller.losses.payments` is set to `stripe` for the account, otherwise `false`.
     */
    public bool $standard_payouts;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disable_stripe_user_authentication' => is_bool($value) ? $this->disable_stripe_user_authentication = $value : parent::assignMember($name, $value),
            'edit_payout_schedule' => is_bool($value) ? $this->edit_payout_schedule = $value : parent::assignMember($name, $value),
            'external_account_collection' => is_bool($value) ? $this->external_account_collection = $value : parent::assignMember($name, $value),
            'instant_payouts' => is_bool($value) ? $this->instant_payouts = $value : parent::assignMember($name, $value),
            'standard_payouts' => is_bool($value) ? $this->standard_payouts = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
