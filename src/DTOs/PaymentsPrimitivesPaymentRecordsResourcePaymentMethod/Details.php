<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * Payment method detail
 *
 * Details about the Payment Method used in this payment attempt.
 */
final class Details extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodDetailsAchCreditTransfer $ach_credit_transfer;
    public \StripeSDK\DTOs\Payment\MethodDetailsAchDebit $ach_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAcssDebit $acss_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAffirm $affirm;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAfterpayClearpay $afterpay_clearpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAlipay $alipay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAlma $alma;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBacsDebit $bacs_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBancontact $bancontact;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBillie $billie;
    /**
     * The billing details associated with the method of payment.
     */
    public ?\StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceBillingDetails $billing_details;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBizum $bizum;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBlik $blik;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBoleto $boleto;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails $card;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardPresent $card_present;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordCashapp $cashapp;
    public \StripeSDK\DTOs\Payment\MethodDetailsCrypto $crypto;
    public \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CustomDetails $custom;
    public \StripeSDK\DTOs\Payment\MethodDetailsCustomerBalance $customer_balance;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordEps $eps;
    public \StripeSDK\DTOs\Payment\MethodDetailsFpx $fpx;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordGiropay $giropay;
    public \StripeSDK\DTOs\Payment\MethodDetailsGrabpay $grabpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordIdeal $ideal;
    public \StripeSDK\DTOs\Payment\MethodDetailsInteracPresent $interac_present;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKakaoPay $kakao_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKlarna $klarna;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKonbini $konbini;
    public \StripeSDK\DTOs\Payment\MethodDetailsKrCard $kr_card;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordLink $link;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMbWay $mb_way;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMobilepay $mobilepay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMomo $momo;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMultibanco $multibanco;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordNaverPay $naver_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordNzBankAccount $nz_bank_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordOxxo $oxxo;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordP24 $p24;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPayByBank $pay_by_bank;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPayco $payco;
    /**
     * ID of the Stripe PaymentMethod used to make this payment.
     */
    public ?string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPaynow $paynow;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaypal $paypal;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPaypay $paypay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPayto $payto;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPix $pix;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPromptpay $promptpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordRevolutPay $revolut_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSamsungPay $samsung_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSatispay $satispay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordScalapay $scalapay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSequra $sequra;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSofort $sofort;
    public \StripeSDK\DTOs\Payment\MethodDetailsStripeAccount $stripe_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSunbit $sunbit;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSwish $swish;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordTwint $twint;
    /**
     * The type of transaction-specific details of the payment method used in the payment. See [PaymentMethod.type](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type) for the full list of possible types.
     * An additional hash is included on `payment_method_details` with a name matching this value.
     * It contains information specific to the payment method.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordUpi $upi;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordUsBankAccount $us_bank_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsWechat $wechat;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordWechatPay $wechat_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordZip $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach_credit_transfer' => $value instanceof \stdClass ? $this->ach_credit_transfer = new \StripeSDK\DTOs\Payment\MethodDetailsAchCreditTransfer($value) : parent::assignMember($name, $value),
            'ach_debit' => $value instanceof \stdClass ? $this->ach_debit = new \StripeSDK\DTOs\Payment\MethodDetailsAchDebit($value) : parent::assignMember($name, $value),
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAcssDebit($value) : parent::assignMember($name, $value),
            'affirm' => $value instanceof \stdClass ? $this->affirm = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAffirm($value) : parent::assignMember($name, $value),
            'afterpay_clearpay' => $value instanceof \stdClass ? $this->afterpay_clearpay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAfterpayClearpay($value) : parent::assignMember($name, $value),
            'alipay' => $value instanceof \stdClass ? $this->alipay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAlipay($value) : parent::assignMember($name, $value),
            'alma' => $value instanceof \stdClass ? $this->alma = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAlma($value) : parent::assignMember($name, $value),
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAmazonPay($value) : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordAuBecsDebit($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBacsDebit($value) : parent::assignMember($name, $value),
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBancontact($value) : parent::assignMember($name, $value),
            'billie' => $value instanceof \stdClass ? $this->billie = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBillie($value) : parent::assignMember($name, $value),
            'billing_details' => $value === null || $value instanceof \stdClass ? $this->billing_details = $value === null ? null : new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourceBillingDetails($value) : parent::assignMember($name, $value),
            'bizum' => $value instanceof \stdClass ? $this->bizum = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBizum($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBlik($value) : parent::assignMember($name, $value),
            'boleto' => $value instanceof \stdClass ? $this->boleto = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordBoleto($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Payment\MethodDetailsCardPresent($value) : parent::assignMember($name, $value),
            'cashapp' => $value instanceof \stdClass ? $this->cashapp = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordCashapp($value) : parent::assignMember($name, $value),
            'crypto' => $value instanceof \stdClass ? $this->crypto = new \StripeSDK\DTOs\Payment\MethodDetailsCrypto($value) : parent::assignMember($name, $value),
            'custom' => $value instanceof \stdClass ? $this->custom = new \StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CustomDetails($value) : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordEps($value) : parent::assignMember($name, $value),
            'fpx' => $value instanceof \stdClass ? $this->fpx = new \StripeSDK\DTOs\Payment\MethodDetailsFpx($value) : parent::assignMember($name, $value),
            'giropay' => $value instanceof \stdClass ? $this->giropay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordGiropay($value) : parent::assignMember($name, $value),
            'grabpay' => $value instanceof \stdClass ? $this->grabpay = new \StripeSDK\DTOs\Payment\MethodDetailsGrabpay($value) : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordIdeal($value) : parent::assignMember($name, $value),
            'interac_present' => $value instanceof \stdClass ? $this->interac_present = new \StripeSDK\DTOs\Payment\MethodDetailsInteracPresent($value) : parent::assignMember($name, $value),
            'kakao_pay' => $value instanceof \stdClass ? $this->kakao_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKakaoPay($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKlarna($value) : parent::assignMember($name, $value),
            'konbini' => $value instanceof \stdClass ? $this->konbini = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordKonbini($value) : parent::assignMember($name, $value),
            'kr_card' => $value instanceof \stdClass ? $this->kr_card = new \StripeSDK\DTOs\Payment\MethodDetailsKrCard($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordLink($value) : parent::assignMember($name, $value),
            'mobilepay' => $value instanceof \stdClass ? $this->mobilepay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMobilepay($value) : parent::assignMember($name, $value),
            'momo' => $value instanceof \stdClass ? $this->momo = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMomo($value) : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordMultibanco($value) : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordNaverPay($value) : parent::assignMember($name, $value),
            'nz_bank_account' => $value instanceof \stdClass ? $this->nz_bank_account = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordNzBankAccount($value) : parent::assignMember($name, $value),
            'oxxo' => $value instanceof \stdClass ? $this->oxxo = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordOxxo($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordP24($value) : parent::assignMember($name, $value),
            'payco' => $value instanceof \stdClass ? $this->payco = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPayco($value) : parent::assignMember($name, $value),
            'payment_method' => $value === null || is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'paynow' => $value instanceof \stdClass ? $this->paynow = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPaynow($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\MethodDetailsPaypal($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPayto($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPix($value) : parent::assignMember($name, $value),
            'promptpay' => $value instanceof \stdClass ? $this->promptpay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordPromptpay($value) : parent::assignMember($name, $value),
            'revolut_pay' => $value instanceof \stdClass ? $this->revolut_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordRevolutPay($value) : parent::assignMember($name, $value),
            'samsung_pay' => $value instanceof \stdClass ? $this->samsung_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSamsungPay($value) : parent::assignMember($name, $value),
            'satispay' => $value instanceof \stdClass ? $this->satispay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSatispay($value) : parent::assignMember($name, $value),
            'scalapay' => $value instanceof \stdClass ? $this->scalapay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordScalapay($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSepaDebit($value) : parent::assignMember($name, $value),
            'sequra' => $value instanceof \stdClass ? $this->sequra = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSequra($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSofort($value) : parent::assignMember($name, $value),
            'sunbit' => $value instanceof \stdClass ? $this->sunbit = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSunbit($value) : parent::assignMember($name, $value),
            'swish' => $value instanceof \stdClass ? $this->swish = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordSwish($value) : parent::assignMember($name, $value),
            'twint' => $value instanceof \stdClass ? $this->twint = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordTwint($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordUpi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordUsBankAccount($value) : parent::assignMember($name, $value),
            'wechat_pay' => $value instanceof \stdClass ? $this->wechat_pay = new \StripeSDK\DTOs\Payment\MethodDetailsPaymentRecordWechatPay($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
