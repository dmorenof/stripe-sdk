<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post;

/**
 * payment_method_data_params
 *
 * If provided, this hash will be used to create a PaymentMethod. The new PaymentMethod will appear
 * in the [payment_method](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-payment_method)
 * property on the PaymentIntent.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataAffirmRequest $affirm;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\AfterpayClearpayRequest $afterpay_clearpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataAlipayRequest $alipay;
    public \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\AllowRedisplayEnum $allow_redisplay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataAlmaRequest $alma;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\AmazonPayRequest $amazon_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\BecsDebitRequest $au_becs_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\BacsDebitRequest $bacs_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataBancontactRequest $bancontact;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataBillieRequest $billie;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\BillingDetailsRequest $billing_details;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataBizumRequest $bizum;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataBlikRequest $blik;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataBoletoRequest $boleto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataCashappRequest $cashapp;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataCryptoRequest $crypto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\CustomerBalanceRequest $customer_balance;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataEpsRequest $eps;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataFpxRequest $fpx;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataGiropayRequest $giropay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataGrabpayRequest $grabpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataIdealRequest $ideal;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\InteracPresentRequest $interac_present;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\KakaoPayRequest $kakao_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataKlarnaRequest $klarna;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataKonbiniRequest $konbini;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\KrCardRequest $kr_card;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataLinkRequest $link;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\MbWayRequest $mb_way;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataMobilepayRequest $mobilepay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataMultibancoRequest $multibanco;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\NaverPayRequest $naver_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\BankAccountRequest $nz_bank_account;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataOxxoRequest $oxxo;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataP24Request $p24;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\ByBankRequest $pay_by_bank;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPaycoRequest $payco;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPaynowRequest $paynow;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPaypalRequest $paypal;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPaypayRequest $paypay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPaytoRequest $payto;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPixRequest $pix;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataPromptpayRequest $promptpay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\RadarOptionsRequest $radar_options;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\RevolutPayRequest $revolut_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\SamsungPayRequest $samsung_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataSatispayRequest $satispay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataScalapayRequest $scalapay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataSequraRequest $sequra;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataSofortRequest $sofort;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataSunbitRequest $sunbit;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataSwishRequest $swish;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataTwintRequest $twint;
    public \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\DataTypeEnum $type;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataUpiRequest $upi;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\UsBankAccount\BankAccountRequest $us_bank_account;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\WechatPayRequest $wechat_pay;
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodData\DataZipRequest $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
