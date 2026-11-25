<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\Post;

/**
 * payment_method_data_params
 *
 * When included, this hash creates a PaymentMethod that is set as the [`payment_method`](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-payment_method)
 * value in the SetupIntent.
 */
final class MethodDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\AcssDebitRequest $acss_debit;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataAffirmRequest $affirm;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\AfterpayClearpayRequest $afterpay_clearpay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataAlipayRequest $alipay;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\AllowRedisplayEnum $allow_redisplay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataAlmaRequest $alma;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\AmazonPayRequest $amazon_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\BecsDebitRequest $au_becs_debit;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\BacsDebitRequest $bacs_debit;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataBancontactRequest $bancontact;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataBillieRequest $billie;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\BillingDetailsRequest $billing_details;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataBizumRequest $bizum;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataBlikRequest $blik;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataBoletoRequest $boleto;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataCashappRequest $cashapp;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataCryptoRequest $crypto;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\CustomerBalanceRequest $customer_balance;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataEpsRequest $eps;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataFpxRequest $fpx;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataGiropayRequest $giropay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataGrabpayRequest $grabpay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataIdealRequest $ideal;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\InteracPresentRequest $interac_present;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\KakaoPayRequest $kakao_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataKlarnaRequest $klarna;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataKonbiniRequest $konbini;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\KrCardRequest $kr_card;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataLinkRequest $link;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\MbWayRequest $mb_way;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataMobilepayRequest $mobilepay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataMultibancoRequest $multibanco;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\NaverPayRequest $naver_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\BankAccountRequest $nz_bank_account;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataOxxoRequest $oxxo;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataP24Request $p24;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\ByBankRequest $pay_by_bank;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPaycoRequest $payco;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPaynowRequest $paynow;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPaypalRequest $paypal;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPaypayRequest $paypay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPaytoRequest $payto;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPixRequest $pix;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataPromptpayRequest $promptpay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\RadarOptionsRequest $radar_options;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\RevolutPayRequest $revolut_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\SamsungPayRequest $samsung_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataSatispayRequest $satispay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataScalapayRequest $scalapay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\SepaDebitRequest $sepa_debit;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataSequraRequest $sequra;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataSofortRequest $sofort;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataSunbitRequest $sunbit;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataSwishRequest $swish;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataTwintRequest $twint;
    public \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\DataTypeEnum $type;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataUpiRequest $upi;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\UsBankAccount\BankAccountRequest $us_bank_account;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\WechatPayRequest $wechat_pay;
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodData\DataZipRequest $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
