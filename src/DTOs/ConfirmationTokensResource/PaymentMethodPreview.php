<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Payment Method Preview
 *
 * Details of the PaymentMethod collected by Payment Element
 */
final class PaymentMethodPreview extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_details',
        'type',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodAcssDebit $acss_debit;
    public \StripeSDK\DTOs\Payment\MethodAffirm $affirm;
    public \StripeSDK\DTOs\Payment\MethodAfterpayClearpay $afterpay_clearpay;
    public \StripeSDK\DTOs\Payment\FlowsPrivatePaymentMethodsAlipay $alipay;
    /**
     * This field indicates whether this payment method can be shown again to its customer in a checkout flow. Stripe products such as Checkout and Elements use this field to determine whether a payment method can be shown as a saved payment method in a checkout flow. The field defaults to “unspecified”.
     */
    public \StripeSDK\Enums\ConfirmationTokensResource\PaymentMethodPreview\AllowRedisplayEnum $allow_redisplay;
    public \StripeSDK\DTOs\Payment\MethodAlma $alma;
    public \StripeSDK\DTOs\Payment\MethodAmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Payment\MethodAuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Payment\MethodBacsDebit $bacs_debit;
    public \StripeSDK\DTOs\Payment\MethodBancontact $bancontact;
    public \StripeSDK\DTOs\Payment\MethodBillie $billie;
    public \StripeSDK\DTOs\Billing\Details $billing_details;
    public \StripeSDK\DTOs\Payment\MethodBizum $bizum;
    public \StripeSDK\DTOs\Payment\MethodBlik $blik;
    public \StripeSDK\DTOs\Payment\MethodBoleto $boleto;
    public \StripeSDK\DTOs\Payment\MethodCard $card;
    public \StripeSDK\DTOs\Payment\MethodCardPresent $card_present;
    public \StripeSDK\DTOs\Payment\MethodCashapp $cashapp;
    public \StripeSDK\DTOs\Payment\MethodCrypto $crypto;
    /**
     * The ID of the Customer to which this PaymentMethod is saved. This will not be set when the PaymentMethod has not been saved to a Customer.
     */
    public ?\StripeSDK\DTOs\ConfirmationTokensResource\PaymentMethodPreview\CustomerDTO $customer;
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodCustomerBalance $customer_balance;
    public \StripeSDK\DTOs\Payment\MethodEps $eps;
    public \StripeSDK\DTOs\Payment\MethodFpx $fpx;
    public \StripeSDK\DTOs\Payment\MethodGiropay $giropay;
    public \StripeSDK\DTOs\Payment\MethodGrabpay $grabpay;
    public \StripeSDK\DTOs\Payment\MethodIdeal $ideal;
    public \StripeSDK\DTOs\Payment\MethodInteracPresent $interac_present;
    public \StripeSDK\DTOs\Payment\MethodKakaoPay $kakao_pay;
    public \StripeSDK\DTOs\Payment\MethodKlarna $klarna;
    public \StripeSDK\DTOs\Payment\MethodKonbini $konbini;
    public \StripeSDK\DTOs\Payment\MethodKrCard $kr_card;
    public \StripeSDK\DTOs\Payment\MethodLink $link;
    public \StripeSDK\DTOs\Payment\MethodMbWay $mb_way;
    public \StripeSDK\DTOs\Payment\MethodMobilepay $mobilepay;
    public \StripeSDK\DTOs\Payment\MethodMultibanco $multibanco;
    public \StripeSDK\DTOs\Payment\MethodNaverPay $naver_pay;
    public \StripeSDK\DTOs\Payment\MethodNzBankAccount $nz_bank_account;
    public \StripeSDK\DTOs\Payment\MethodOxxo $oxxo;
    public \StripeSDK\DTOs\Payment\MethodP24 $p24;
    public \StripeSDK\DTOs\Payment\MethodPayByBank $pay_by_bank;
    public \StripeSDK\DTOs\Payment\MethodPayco $payco;
    public \StripeSDK\DTOs\Payment\MethodPaynow $paynow;
    public \StripeSDK\DTOs\Payment\MethodPaypal $paypal;
    public \StripeSDK\DTOs\Payment\MethodPaypay $paypay;
    public \StripeSDK\DTOs\Payment\MethodPayto $payto;
    public \StripeSDK\DTOs\Payment\MethodPix $pix;
    public \StripeSDK\DTOs\Payment\MethodPromptpay $promptpay;
    public \StripeSDK\DTOs\Payment\MethodRevolutPay $revolut_pay;
    public \StripeSDK\DTOs\Payment\MethodSamsungPay $samsung_pay;
    public \StripeSDK\DTOs\Payment\MethodSatispay $satispay;
    public \StripeSDK\DTOs\Payment\MethodScalapay $scalapay;
    public \StripeSDK\DTOs\Payment\MethodSepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Payment\MethodSequra $sequra;
    public \StripeSDK\DTOs\Payment\MethodSofort $sofort;
    public \StripeSDK\DTOs\Payment\MethodSunbit $sunbit;
    public \StripeSDK\DTOs\Payment\MethodSwish $swish;
    public \StripeSDK\DTOs\Payment\MethodTwint $twint;
    /**
     * The type of the PaymentMethod. An additional hash is included on the PaymentMethod with a name matching this value. It contains additional information specific to the PaymentMethod type.
     */
    public \StripeSDK\Enums\ConfirmationTokensResource\PaymentMethodPreview\TypeEnum $type;
    public \StripeSDK\DTOs\Payment\MethodUpi $upi;
    public \StripeSDK\DTOs\Payment\MethodUsBankAccount $us_bank_account;
    public \StripeSDK\DTOs\Payment\MethodWechatPay $wechat_pay;
    public \StripeSDK\DTOs\Payment\MethodZip $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Payment\MethodAcssDebit($value) : parent::assignMember($name, $value),
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\ConfirmationTokensResource\PaymentMethodPreview\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Payment\MethodAuBecsDebit($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Payment\MethodBacsDebit($value) : parent::assignMember($name, $value),
            'billing_details' => $value instanceof \stdClass ? $this->billing_details = new \StripeSDK\DTOs\Billing\Details($value) : parent::assignMember($name, $value),
            'bizum' => $value instanceof \stdClass ? $this->bizum = new \StripeSDK\DTOs\Payment\MethodBizum($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Payment\MethodBlik($value) : parent::assignMember($name, $value),
            'boleto' => $value instanceof \stdClass ? $this->boleto = new \StripeSDK\DTOs\Payment\MethodBoleto($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Payment\MethodCard($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Payment\MethodCardPresent($value) : parent::assignMember($name, $value),
            'cashapp' => $value instanceof \stdClass ? $this->cashapp = new \StripeSDK\DTOs\Payment\MethodCashapp($value) : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Payment\MethodEps($value) : parent::assignMember($name, $value),
            'fpx' => $value instanceof \stdClass ? $this->fpx = new \StripeSDK\DTOs\Payment\MethodFpx($value) : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Payment\MethodIdeal($value) : parent::assignMember($name, $value),
            'interac_present' => $value instanceof \stdClass ? $this->interac_present = new \StripeSDK\DTOs\Payment\MethodInteracPresent($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\MethodKlarna($value) : parent::assignMember($name, $value),
            'kr_card' => $value instanceof \stdClass ? $this->kr_card = new \StripeSDK\DTOs\Payment\MethodKrCard($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodLink($value) : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Payment\MethodNaverPay($value) : parent::assignMember($name, $value),
            'nz_bank_account' => $value instanceof \stdClass ? $this->nz_bank_account = new \StripeSDK\DTOs\Payment\MethodNzBankAccount($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Payment\MethodP24($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\MethodPaypal($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Payment\MethodPayto($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Payment\MethodPix($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Payment\MethodSepaDebit($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Payment\MethodSofort($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ConfirmationTokensResource\PaymentMethodPreview\TypeEnum::from($value) : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Payment\MethodUpi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Payment\MethodUsBankAccount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
