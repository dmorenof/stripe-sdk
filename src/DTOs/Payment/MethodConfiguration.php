<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * Payment Method Configuration
 *
 * PaymentMethodConfigurations control which payment methods are displayed to your customers when you don't explicitly specify payment method types. You can have multiple configurations with different sets of payment methods for different scenarios.
 *
 * There are two types of PaymentMethodConfigurations. Which is used depends on the [charge type](https://docs.stripe.com/connect/charges):
 *
 * **Direct** configurations apply to payments created on your account, including Connect destination charges, Connect separate charges and transfers, and payments not involving Connect.
 *
 * **Child** configurations apply to payments created on your connected accounts using direct charges, and charges with the on_behalf_of parameter.
 *
 * Child configurations have a `parent` that sets default values and controls which settings connected accounts may override. You can specify a parent ID at payment time, and Stripe will automatically resolve the connected account’s associated child configuration. Parent configurations are [managed in the dashboard](https://dashboard.stripe.com/settings/payment_methods/connected_accounts) and are not available in this API.
 *
 * Related guides:
 * - [Payment Method Configurations API](https://docs.stripe.com/connect/payment-method-configurations)
 * - [Multiple configurations on dynamic payment methods](https://docs.stripe.com/payments/multiple-payment-method-configs)
 * - [Multiple configurations for your Connect accounts](https://docs.stripe.com/connect/multiple-payment-method-configurations)
 */
final class MethodConfiguration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'id',
        'is_default',
        'livemode',
        'name',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'application' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'parent_' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $acss_debit;
    /**
     * Whether the configuration can be used for new payments.
     */
    public bool $active;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $affirm;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $afterpay_clearpay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $alipay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $alma;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $amazon_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $apple_pay;
    /**
     * For child configs, the Connect application associated with the configuration.
     */
    public ?string $application {
        set {
            $this->assigning('application', $value);
            $this->application = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $au_becs_debit;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $bacs_debit;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $bancontact;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $billie;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $bizum;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $blik;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $boleto;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $card;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $cartes_bancaires;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $cashapp;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $crypto;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $customer_balance;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $eps;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $fpx;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $giropay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $google_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $grabpay;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $ideal;
    /**
     * The default configuration is used whenever a payment method configuration is not specified.
     */
    public bool $is_default;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $jcb;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $kakao_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $klarna;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $konbini;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $kr_card;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $link;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $mb_way;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $mobilepay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $multibanco;
    /**
     * The configuration's name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $naver_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $nz_bank_account;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payment\MethodConfiguration\ObjectEnum $object_;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $oxxo;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $p24;
    /**
     * For child configs, the configuration's parent configuration.
     */
    public ?string $parent_ {
        set {
            $this->assigning('parent_', $value);
            $this->parent_ = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $pay_by_bank;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $payco;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $paynow;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $paypal;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $paypay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $payto;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $pix;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $promptpay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $revolut_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $samsung_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $satispay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $scalapay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $sepa_debit;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $sequra;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $sofort;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $sunbit;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $swish;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $twint;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $upi;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $us_bank_account;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $wechat_pay;
    public \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'affirm' => $value instanceof \stdClass ? $this->affirm = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'afterpay_clearpay' => $value instanceof \stdClass ? $this->afterpay_clearpay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'alipay' => $value instanceof \stdClass ? $this->alipay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'alma' => $value instanceof \stdClass ? $this->alma = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'apple_pay' => $value instanceof \stdClass ? $this->apple_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'application' => $value === null || is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'billie' => $value instanceof \stdClass ? $this->billie = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'bizum' => $value instanceof \stdClass ? $this->bizum = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'boleto' => $value instanceof \stdClass ? $this->boleto = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'cartes_bancaires' => $value instanceof \stdClass ? $this->cartes_bancaires = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'cashapp' => $value instanceof \stdClass ? $this->cashapp = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'crypto' => $value instanceof \stdClass ? $this->crypto = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'customer_balance' => $value instanceof \stdClass ? $this->customer_balance = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'fpx' => $value instanceof \stdClass ? $this->fpx = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'giropay' => $value instanceof \stdClass ? $this->giropay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'google_pay' => $value instanceof \stdClass ? $this->google_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'grabpay' => $value instanceof \stdClass ? $this->grabpay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'jcb' => $value instanceof \stdClass ? $this->jcb = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'kakao_pay' => $value instanceof \stdClass ? $this->kakao_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'konbini' => $value instanceof \stdClass ? $this->konbini = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'kr_card' => $value instanceof \stdClass ? $this->kr_card = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'mb_way' => $value instanceof \stdClass ? $this->mb_way = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'mobilepay' => $value instanceof \stdClass ? $this->mobilepay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'nz_bank_account' => $value instanceof \stdClass ? $this->nz_bank_account = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payment\MethodConfiguration\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'oxxo' => $value instanceof \stdClass ? $this->oxxo = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'parent' => $value === null || is_string($value) ? $this->parent_ = $value : parent::assignMember($name, $value),
            'pay_by_bank' => $value instanceof \stdClass ? $this->pay_by_bank = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'payco' => $value instanceof \stdClass ? $this->payco = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'paynow' => $value instanceof \stdClass ? $this->paynow = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'paypay' => $value instanceof \stdClass ? $this->paypay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'promptpay' => $value instanceof \stdClass ? $this->promptpay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'revolut_pay' => $value instanceof \stdClass ? $this->revolut_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'samsung_pay' => $value instanceof \stdClass ? $this->samsung_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'satispay' => $value instanceof \stdClass ? $this->satispay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'scalapay' => $value instanceof \stdClass ? $this->scalapay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'sequra' => $value instanceof \stdClass ? $this->sequra = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'sunbit' => $value instanceof \stdClass ? $this->sunbit = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'swish' => $value instanceof \stdClass ? $this->swish = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'twint' => $value instanceof \stdClass ? $this->twint = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'wechat_pay' => $value instanceof \stdClass ? $this->wechat_pay = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            'zip' => $value instanceof \stdClass ? $this->zip = new \StripeSDK\DTOs\Payment\MethodConfigResourcePaymentMethodProperties($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
