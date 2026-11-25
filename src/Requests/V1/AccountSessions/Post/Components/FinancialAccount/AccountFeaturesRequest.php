<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\FinancialAccount;

/**
 * financial_account_features_param
 */
final class AccountFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $disable_stripe_user_authentication;
    public bool $external_account_collection;
    public bool $send_money;
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
