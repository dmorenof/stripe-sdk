<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post\Components\FinancialAccountTransactions;

/**
 * financial_account_transactions_features_param
 */
final class TransactionsFeaturesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $card_spend_dispute_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_spend_dispute_management' => is_bool($value) ? $this->card_spend_dispute_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
