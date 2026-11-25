<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountSessions\Post;

/**
 * account_session_create_components_param
 *
 * Each key of the dictionary represents an embedded component, and each embedded component maps to its configuration (e.g. whether it has been enabled or not).
 */
final class AccountSessionsComponentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\AccountManagementRequest $account_management;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\AccountOnboardingRequest $account_onboarding;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\BalanceReportRequest $balance_report;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\ComponentsBalancesRequest $balances;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\DisputesListRequest $disputes_list;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\ComponentsDocumentsRequest $documents;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\FinancialAccountRequest $financial_account;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\AccountTransactionsRequest $financial_account_transactions;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\PayoutsPromotionRequest $instant_payouts_promotion;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\IssuingCardRequest $issuing_card;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\CardsListRequest $issuing_cards_list;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\NotificationBannerRequest $notification_banner;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\PaymentDetailsRequest $payment_details;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\PaymentDisputesRequest $payment_disputes;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\MethodSettingsRequest $payment_method_settings;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\ComponentsPaymentsRequest $payments;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\PayoutDetailsRequest $payout_details;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\ReconciliationReportRequest $payout_reconciliation_report;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\ComponentsPayoutsRequest $payouts;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\PayoutsListRequest $payouts_list;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\TaxRegistrationsRequest $tax_registrations;
    public \StripeSDK\Requests\V1\AccountSessions\Post\Components\TaxSettingsRequest $tax_settings;
}
