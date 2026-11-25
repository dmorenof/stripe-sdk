<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * payment_method_options_param
 *
 * Payment-method-specific configuration.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsAffirmRequest $affirm;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AfterpayClearpayRequest $afterpay_clearpay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsAlipayRequest $alipay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsAlmaRequest $alma;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\AmazonPayRequest $amazon_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\BecsDebitRequest $au_becs_debit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\BacsDebitRequest $bacs_debit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsBancontactRequest $bancontact;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsBillieRequest $billie;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsBlikRequest $blik;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsBoletoRequest $boleto;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsCashappRequest $cashapp;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsCryptoRequest $crypto;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\CustomerBalanceRequest $customer_balance;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\DemoPayRequest $demo_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsEpsRequest $eps;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsFpxRequest $fpx;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsGiropayRequest $giropay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsGrabpayRequest $grabpay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsIdealRequest $ideal;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\KakaoPayRequest $kakao_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsKlarnaRequest $klarna;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsKonbiniRequest $konbini;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\KrCardRequest $kr_card;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsLinkRequest $link;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsMobilepayRequest $mobilepay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsMultibancoRequest $multibanco;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\NaverPayRequest $naver_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsOxxoRequest $oxxo;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsP24Request $p24;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\ByBankRequest $pay_by_bank;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsPaycoRequest $payco;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsPaynowRequest $paynow;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsPaypalRequest $paypal;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsPaytoRequest $payto;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsPixRequest $pix;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\RevolutPayRequest $revolut_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\SamsungPayRequest $samsung_pay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsSatispayRequest $satispay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsScalapayRequest $scalapay;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsSequraRequest $sequra;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsSofortRequest $sofort;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsSunbitRequest $sunbit;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsSwishRequest $swish;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsTwintRequest $twint;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\OptionsUpiRequest $upi;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\BankAccountRequest $us_bank_account;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\PaymentMethodOptions\WechatPayRequest $wechat_pay;
}
