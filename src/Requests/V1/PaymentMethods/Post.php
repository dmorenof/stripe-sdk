<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethods;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If this is an `acss_debit` PaymentMethod, this hash contains details about the ACSS Debit payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\AcssDebitRequest $acss_debit;
    /**
     * If this is an `affirm` PaymentMethod, this hash contains details about the Affirm payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsAffirmRequest $affirm;
    /**
     * If this is an `AfterpayClearpay` PaymentMethod, this hash contains details about the AfterpayClearpay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\AfterpayClearpayRequest $afterpay_clearpay;
    /**
     * If this is an `Alipay` PaymentMethod, this hash contains details about the Alipay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsAlipayRequest $alipay;
    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow. The field defaults to `unspecified`.
     */
    public \StripeSDK\Enums\V1\PaymentMethods\Post\AllowRedisplayEnum $allow_redisplay;
    /**
     * If this is an Alma PaymentMethod, this hash contains details about the Alma payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsAlmaRequest $alma;
    /**
     * If this is an AmazonPay PaymentMethod, this hash contains details about the AmazonPay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\AmazonPayRequest $amazon_pay;
    /**
     * If this is an `au_becs_debit` PaymentMethod, this hash contains details about the bank account.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\BecsDebitRequest $au_becs_debit;
    /**
     * If this is a `bacs_debit` PaymentMethod, this hash contains details about the Bacs Direct Debit bank account.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\BacsDebitRequest $bacs_debit;
    /**
     * If this is a `bancontact` PaymentMethod, this hash contains details about the Bancontact payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsBancontactRequest $bancontact;
    /**
     * If this is a `billie` PaymentMethod, this hash contains details about the Billie payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsBillieRequest $billie;
    /**
     * Billing information associated with the PaymentMethod that may be used or required by particular types of payment methods.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\BillingDetailsRequest $billing_details;
    /**
     * If this is a `bizum` PaymentMethod, this hash contains details about the Bizum payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsBizumRequest $bizum;
    /**
     * If this is a `blik` PaymentMethod, this hash contains details about the BLIK payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsBlikRequest $blik;
    /**
     * If this is a `boleto` PaymentMethod, this hash contains details about the Boleto payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsBoletoRequest $boleto;
    /**
     * If this is a `card` PaymentMethod, this hash contains the user's card details. For backwards compatibility, you can alternatively provide a Stripe token (e.g., for Apple Pay, Amex Express Checkout, or legacy Checkout) into the card hash with format `card: {token: "tok_visa"}`. When providing a card number, you must meet the requirements for [PCI compliance](https://stripe.com/docs/security#validating-pci-compliance). We strongly recommend using Stripe.js instead of interacting with this API directly.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsCardRequest $card;
    /**
     * If this is a `cashapp` PaymentMethod, this hash contains details about the Cash App Pay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsCashappRequest $cashapp;
    /**
     * If this is a Crypto PaymentMethod, this hash contains details about the Crypto payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsCryptoRequest $crypto;
    /**
     * If this is a `custom` PaymentMethod, this hash contains details about the Custom payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsCustomRequest $custom;
    /**
     * The `Customer` to whom the original PaymentMethod is attached.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * If this is a `customer_balance` PaymentMethod, this hash contains details about the CustomerBalance payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\CustomerBalanceRequest $customer_balance;
    /**
     * If this is an `eps` PaymentMethod, this hash contains details about the EPS payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsEpsRequest $eps;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * If this is an `fpx` PaymentMethod, this hash contains details about the FPX payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsFpxRequest $fpx;
    /**
     * If this is a `giropay` PaymentMethod, this hash contains details about the Giropay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsGiropayRequest $giropay;
    /**
     * If this is a `grabpay` PaymentMethod, this hash contains details about the GrabPay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsGrabpayRequest $grabpay;
    /**
     * If this is an `ideal` PaymentMethod, this hash contains details about the iDEAL payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsIdealRequest $ideal;
    /**
     * If this is an `interac_present` PaymentMethod, this hash contains details about the Interac Present payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\InteracPresentRequest $interac_present;
    /**
     * If this is a `kakao_pay` PaymentMethod, this hash contains details about the Kakao Pay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\KakaoPayRequest $kakao_pay;
    /**
     * If this is a `klarna` PaymentMethod, this hash contains details about the Klarna payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsKlarnaRequest $klarna;
    /**
     * If this is a `konbini` PaymentMethod, this hash contains details about the Konbini payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsKonbiniRequest $konbini;
    /**
     * If this is a `kr_card` PaymentMethod, this hash contains details about the Korean Card payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\KrCardRequest $kr_card;
    /**
     * If this is an `Link` PaymentMethod, this hash contains details about the Link payment method (Link is also known as Onelink in the UK).
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsLinkRequest $link;
    /**
     * If this is a MB WAY PaymentMethod, this hash contains details about the MB WAY payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\MbWayRequest $mb_way;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\MetadataMapRequest $metadata;
    /**
     * If this is a `mobilepay` PaymentMethod, this hash contains details about the MobilePay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsMobilepayRequest $mobilepay;
    /**
     * If this is a `multibanco` PaymentMethod, this hash contains details about the Multibanco payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsMultibancoRequest $multibanco;
    /**
     * If this is a `naver_pay` PaymentMethod, this hash contains details about the Naver Pay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\NaverPayRequest $naver_pay;
    /**
     * If this is an nz_bank_account PaymentMethod, this hash contains details about the nz_bank_account payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\BankAccountRequest $nz_bank_account;
    /**
     * If this is an `oxxo` PaymentMethod, this hash contains details about the OXXO payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsOxxoRequest $oxxo;
    /**
     * If this is a `p24` PaymentMethod, this hash contains details about the P24 payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsP24Request $p24;
    /**
     * If this is a `pay_by_bank` PaymentMethod, this hash contains details about the PayByBank payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\ByBankRequest $pay_by_bank;
    /**
     * If this is a `payco` PaymentMethod, this hash contains details about the PAYCO payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPaycoRequest $payco;
    /**
     * The PaymentMethod to share.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * If this is a `paynow` PaymentMethod, this hash contains details about the PayNow payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPaynowRequest $paynow;
    /**
     * If this is a `paypal` PaymentMethod, this hash contains details about the PayPal payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPaypalRequest $paypal;
    /**
     * If this is a `paypay` PaymentMethod, this hash contains details about the PayPay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPaypayRequest $paypay;
    /**
     * If this is a `payto` PaymentMethod, this hash contains details about the PayTo payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPaytoRequest $payto;
    /**
     * If this is a `pix` PaymentMethod, this hash contains details about the Pix payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPixRequest $pix;
    /**
     * If this is a `promptpay` PaymentMethod, this hash contains details about the PromptPay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsPromptpayRequest $promptpay;
    /**
     * Options to configure Radar. See [Radar Session](https://docs.stripe.com/radar/radar-session) for more information.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\RadarOptionsRequest $radar_options;
    /**
     * If this is a `revolut_pay` PaymentMethod, this hash contains details about the Revolut Pay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\RevolutPayRequest $revolut_pay;
    /**
     * If this is a `samsung_pay` PaymentMethod, this hash contains details about the SamsungPay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\SamsungPayRequest $samsung_pay;
    /**
     * If this is a `satispay` PaymentMethod, this hash contains details about the Satispay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsSatispayRequest $satispay;
    /**
     * If this is a Scalapay PaymentMethod, this hash contains details about the Scalapay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsScalapayRequest $scalapay;
    /**
     * If this is a `sepa_debit` PaymentMethod, this hash contains details about the SEPA debit bank account.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\SepaDebitRequest $sepa_debit;
    /**
     * If this is a SeQura PaymentMethod, this hash contains details about the SeQura payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsSequraRequest $sequra;
    /**
     * If this is a `sofort` PaymentMethod, this hash contains details about the SOFORT payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsSofortRequest $sofort;
    /**
     * If this is a `sunbit` PaymentMethod, this hash contains details about the Sunbit payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsSunbitRequest $sunbit;
    /**
     * If this is a `swish` PaymentMethod, this hash contains details about the Swish payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsSwishRequest $swish;
    /**
     * If this is a TWINT PaymentMethod, this hash contains details about the TWINT payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsTwintRequest $twint;
    /**
     * The type of the PaymentMethod. An additional hash is included on the PaymentMethod with a name matching this value. It contains additional information specific to the PaymentMethod type.
     */
    public \StripeSDK\Enums\V1\PaymentMethods\Post\PaymentMethodsTypeEnum $type;
    /**
     * If this is a `upi` PaymentMethod, this hash contains details about the UPI payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsUpiRequest $upi;
    /**
     * If this is an `us_bank_account` PaymentMethod, this hash contains details about the US bank account payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\UsBankAccount\BankAccountRequest $us_bank_account;
    /**
     * If this is an `wechat_pay` PaymentMethod, this hash contains details about the wechat_pay payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\WechatPayRequest $wechat_pay;
    /**
     * If this is a `zip` PaymentMethod, this hash contains details about the Zip payment method.
     */
    public \StripeSDK\Requests\V1\PaymentMethods\Post\PaymentMethodsZipRequest $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\PaymentMethods\Post\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentMethods\Post\PaymentMethodsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
