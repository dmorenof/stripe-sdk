<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntentPaymentMethodOptions
 */
final class IntentPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\AcssDebitDTO $acss_debit;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\AmazonPayDTO $amazon_pay;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\BacsDebitDTO $bacs_debit;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\BizumDTO $bizum;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\BlikDTO $blik;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\CardDTO $card;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\CardPresentDTO $card_present;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\KlarnaDTO $klarna;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\LinkDTO $link;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\PaypalDTO $paypal;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\PaytoDTO $payto;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\PixDTO $pix;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\SepaDebitDTO $sepa_debit;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\UpiDTO $upi;
    public \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions\BankAccountDTO $us_bank_account;
}
