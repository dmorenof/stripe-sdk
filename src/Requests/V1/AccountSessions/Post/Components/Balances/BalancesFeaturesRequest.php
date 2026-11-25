<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\Balances;

/**
 * payouts_features_param
 */
final class BalancesFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $disable_stripe_user_authentication;
    public bool $edit_payout_schedule;
    public bool $external_account_collection;
    public bool $instant_payouts;
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
