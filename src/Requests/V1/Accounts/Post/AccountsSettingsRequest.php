<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post;

/**
 * settings_specs
 *
 * Options for customizing how the account functions within Stripe.
 */
final class AccountsSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\DebitPaymentsRequest $bacs_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SettingsBrandingRequest $branding;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\CardPaymentsRequest $card_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SettingsInvoicesRequest $invoices;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SettingsPaymentsRequest $payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SettingsPayoutsRequest $payouts;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\PaypayPaymentsRequest $paypay_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SepaDebitPayments\DebitPaymentsRequest $sepa_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\SettingsTreasuryRequest $treasury;
}
