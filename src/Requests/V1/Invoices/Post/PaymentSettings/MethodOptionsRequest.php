<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\PaymentSettings;

/**
 * payment_method_options
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsBancontactRequest $bancontact;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsBillieRequest $billie;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsBlikRequest $blik;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\CustomerBalanceRequest $customer_balance;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsKonbiniRequest $konbini;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsPaytoRequest $payto;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsPixRequest $pix;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\OptionsUpiRequest $upi;
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettings\PaymentMethodOptions\BankAccountRequest $us_bank_account;
}
