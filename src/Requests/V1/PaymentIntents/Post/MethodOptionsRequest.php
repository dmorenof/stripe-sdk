<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * payment_method_options_param
 *
 * Payment method-specific configuration for this PaymentIntent.
 */
final class MethodOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsAffirmRequest $affirm;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\AfterpayClearpayRequest $afterpay_clearpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsAlipayRequest $alipay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsAlmaRequest $alma;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\AmazonPayRequest $amazon_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\BecsDebitRequest $au_becs_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\BacsDebitRequest $bacs_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsBancontactRequest $bancontact;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsBillieRequest $billie;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsBizumRequest $bizum;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsBlikRequest $blik;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsBoletoRequest $boleto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsCardRequest $card;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\CardPresentRequest $card_present;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsCashappRequest $cashapp;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsCryptoRequest $crypto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\CustomerBalanceRequest $customer_balance;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsEpsRequest $eps;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsFpxRequest $fpx;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsGiropayRequest $giropay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsGrabpayRequest $grabpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsIdealRequest $ideal;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\InteracPresentRequest $interac_present;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\KakaoPayRequest $kakao_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsKlarnaRequest $klarna;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsKonbiniRequest $konbini;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\KrCardRequest $kr_card;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsLinkRequest $link;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\MbWayRequest $mb_way;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsMobilepayRequest $mobilepay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsMultibancoRequest $multibanco;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\NaverPayRequest $naver_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\BankAccountRequest $nz_bank_account;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsOxxoRequest $oxxo;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsP24Request $p24;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\ByBankRequest $pay_by_bank;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPaycoRequest $payco;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPaynowRequest $paynow;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPaypalRequest $paypal;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPaypayRequest $paypay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPaytoRequest $payto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPixRequest $pix;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsPromptpayRequest $promptpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\RevolutPayRequest $revolut_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\SamsungPayRequest $samsung_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsSatispayRequest $satispay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsScalapayRequest $scalapay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsSequraRequest $sequra;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsSofortRequest $sofort;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsSunbitRequest $sunbit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsSwishRequest $swish;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsTwintRequest $twint;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsUpiRequest $upi;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\AnyOfUsBankAccount\BankAccountRequest $us_bank_account;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\WechatPayRequest $wechat_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions\OptionsZipRequest $zip;
}
