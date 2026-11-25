<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedAccountSessionCreateComponents
 */
final class AccountSessionCreateComponents extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_management',
        'account_onboarding',
        'balance_report',
        'balances',
        'disputes_list',
        'documents',
        'financial_account',
        'financial_account_transactions',
        'instant_payouts_promotion',
        'issuing_card',
        'issuing_cards_list',
        'notification_banner',
        'payment_details',
        'payment_disputes',
        'payment_method_settings',
        'payments',
        'payout_details',
        'payout_reconciliation_report',
        'payouts',
        'payouts_list',
        'tax_registrations',
        'tax_settings',
    ];

    public \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim $account_management;
    public \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim $account_onboarding;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $balance_report;
    public \StripeSDK\DTOs\ConnectEmbedded\PayoutsConfig $balances;
    public \StripeSDK\DTOs\ConnectEmbedded\DisputesListConfig $disputes_list;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $documents;
    public \StripeSDK\DTOs\ConnectEmbedded\FinancialAccountConfigClaim $financial_account;
    public \StripeSDK\DTOs\ConnectEmbedded\FinancialAccountTransactionsConfigClaim $financial_account_transactions;
    public \StripeSDK\DTOs\ConnectEmbedded\InstantPayoutsPromotionConfig $instant_payouts_promotion;
    public \StripeSDK\DTOs\ConnectEmbedded\IssuingCardConfigClaim $issuing_card;
    public \StripeSDK\DTOs\ConnectEmbedded\IssuingCardsListConfigClaim $issuing_cards_list;
    public \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim $notification_banner;
    public \StripeSDK\DTOs\ConnectEmbedded\PaymentsConfigClaim $payment_details;
    public \StripeSDK\DTOs\ConnectEmbedded\PaymentDisputesConfig $payment_disputes;
    public \StripeSDK\DTOs\ConnectEmbedded\PaymentMethodSettingsConfigClaim $payment_method_settings;
    public \StripeSDK\DTOs\ConnectEmbedded\PaymentsConfigClaim $payments;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $payout_details;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $payout_reconciliation_report;
    public \StripeSDK\DTOs\ConnectEmbedded\PayoutsConfig $payouts;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $payouts_list;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $tax_registrations;
    public \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim $tax_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_management' => $value instanceof \stdClass ? $this->account_management = new \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim($value) : parent::assignMember($name, $value),
            'account_onboarding' => $value instanceof \stdClass ? $this->account_onboarding = new \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim($value) : parent::assignMember($name, $value),
            'balance_report' => $value instanceof \stdClass ? $this->balance_report = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'balances' => $value instanceof \stdClass ? $this->balances = new \StripeSDK\DTOs\ConnectEmbedded\PayoutsConfig($value) : parent::assignMember($name, $value),
            'disputes_list' => $value instanceof \stdClass ? $this->disputes_list = new \StripeSDK\DTOs\ConnectEmbedded\DisputesListConfig($value) : parent::assignMember($name, $value),
            'documents' => $value instanceof \stdClass ? $this->documents = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'financial_account' => $value instanceof \stdClass ? $this->financial_account = new \StripeSDK\DTOs\ConnectEmbedded\FinancialAccountConfigClaim($value) : parent::assignMember($name, $value),
            'financial_account_transactions' => $value instanceof \stdClass ? $this->financial_account_transactions = new \StripeSDK\DTOs\ConnectEmbedded\FinancialAccountTransactionsConfigClaim($value) : parent::assignMember($name, $value),
            'instant_payouts_promotion' => $value instanceof \stdClass ? $this->instant_payouts_promotion = new \StripeSDK\DTOs\ConnectEmbedded\InstantPayoutsPromotionConfig($value) : parent::assignMember($name, $value),
            'issuing_card' => $value instanceof \stdClass ? $this->issuing_card = new \StripeSDK\DTOs\ConnectEmbedded\IssuingCardConfigClaim($value) : parent::assignMember($name, $value),
            'issuing_cards_list' => $value instanceof \stdClass ? $this->issuing_cards_list = new \StripeSDK\DTOs\ConnectEmbedded\IssuingCardsListConfigClaim($value) : parent::assignMember($name, $value),
            'notification_banner' => $value instanceof \stdClass ? $this->notification_banner = new \StripeSDK\DTOs\ConnectEmbedded\AccountConfigClaim($value) : parent::assignMember($name, $value),
            'payment_details' => $value instanceof \stdClass ? $this->payment_details = new \StripeSDK\DTOs\ConnectEmbedded\PaymentsConfigClaim($value) : parent::assignMember($name, $value),
            'payment_disputes' => $value instanceof \stdClass ? $this->payment_disputes = new \StripeSDK\DTOs\ConnectEmbedded\PaymentDisputesConfig($value) : parent::assignMember($name, $value),
            'payment_method_settings' => $value instanceof \stdClass ? $this->payment_method_settings = new \StripeSDK\DTOs\ConnectEmbedded\PaymentMethodSettingsConfigClaim($value) : parent::assignMember($name, $value),
            'payments' => $value instanceof \stdClass ? $this->payments = new \StripeSDK\DTOs\ConnectEmbedded\PaymentsConfigClaim($value) : parent::assignMember($name, $value),
            'payout_details' => $value instanceof \stdClass ? $this->payout_details = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'payout_reconciliation_report' => $value instanceof \stdClass ? $this->payout_reconciliation_report = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'payouts' => $value instanceof \stdClass ? $this->payouts = new \StripeSDK\DTOs\ConnectEmbedded\PayoutsConfig($value) : parent::assignMember($name, $value),
            'payouts_list' => $value instanceof \stdClass ? $this->payouts_list = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'tax_registrations' => $value instanceof \stdClass ? $this->tax_registrations = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            'tax_settings' => $value instanceof \stdClass ? $this->tax_settings = new \StripeSDK\DTOs\ConnectEmbedded\BaseConfigClaim($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
