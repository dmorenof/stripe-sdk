<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post;

/**
 * payment_method_options_param
 *
 * Payment method-specific configuration for this SetupIntent.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\AmazonPayRequest $amazon_pay;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\BacsDebitRequest $bacs_debit;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsBizumRequest $bizum;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsBlikRequest $blik;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\CardPresentRequest $card_present;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsKlarnaRequest $klarna;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsLinkRequest $link;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsPaypalRequest $paypal;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsPaytoRequest $payto;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsPixRequest $pix;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\OptionsUpiRequest $upi;
    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\BankAccountRequest $us_bank_account;
}
