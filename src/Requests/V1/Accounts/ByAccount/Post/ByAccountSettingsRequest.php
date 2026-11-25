<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post;

/**
 * settings_specs_update
 *
 * Options for customizing how the account functions within Stripe.
 */
final class ByAccountSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\DebitPaymentsRequest $bacs_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SettingsBrandingRequest $branding;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\CardPaymentsRequest $card_payments;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SettingsInvoicesRequest $invoices;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SettingsPaymentsRequest $payments;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SettingsPayoutsRequest $payouts;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\PaypayPaymentsRequest $paypay_payments;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SepaDebitPayments\DebitPaymentsRequest $sepa_debit_payments;
    public \StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\SettingsTreasuryRequest $treasury;
}
