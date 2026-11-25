<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details
 */
final class MethodDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodDetailsAchCreditTransfer $ach_credit_transfer;
    public \StripeSDK\DTOs\Payment\MethodDetailsAchDebit $ach_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsAcssDebit $acss_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsAffirm $affirm;
    public \StripeSDK\DTOs\Payment\MethodDetailsAfterpayClearpay $afterpay_clearpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsAlipay $alipay;
    public \StripeSDK\DTOs\Payment\MethodDetailsAlma $alma;
    public \StripeSDK\DTOs\Payment\MethodDetailsAmazonPay $amazon_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsAuBecsDebit $au_becs_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsBacsDebit $bacs_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsBancontact $bancontact;
    public \StripeSDK\DTOs\Payment\MethodDetailsBillie $billie;
    public \StripeSDK\DTOs\Payment\MethodDetailsBizum $bizum;
    public \StripeSDK\DTOs\Payment\MethodDetailsBlik $blik;
    public \StripeSDK\DTOs\Payment\MethodDetailsBoleto $boleto;
    public \StripeSDK\DTOs\Payment\MethodDetailsCard $card;
    public \StripeSDK\DTOs\Payment\MethodDetailsCardPresent $card_present;
    public \StripeSDK\DTOs\Payment\MethodDetailsCashapp $cashapp;
    public \StripeSDK\DTOs\Payment\MethodDetailsCrypto $crypto;
    public \StripeSDK\DTOs\Payment\MethodDetailsCustomerBalance $customer_balance;
    public \StripeSDK\DTOs\Payment\MethodDetailsEps $eps;
    public \StripeSDK\DTOs\Payment\MethodDetailsFpx $fpx;
    public \StripeSDK\DTOs\Payment\MethodDetailsGiropay $giropay;
    public \StripeSDK\DTOs\Payment\MethodDetailsGrabpay $grabpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsIdeal $ideal;
    public \StripeSDK\DTOs\Payment\MethodDetailsInteracPresent $interac_present;
    public \StripeSDK\DTOs\Payment\MethodDetailsKakaoPay $kakao_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsKlarna $klarna;
    public \StripeSDK\DTOs\Payment\MethodDetailsKonbini $konbini;
    public \StripeSDK\DTOs\Payment\MethodDetailsKrCard $kr_card;
    public \StripeSDK\DTOs\Payment\MethodDetailsLink $link;
    public \StripeSDK\DTOs\Payment\MethodDetailsMbWay $mb_way;
    public \StripeSDK\DTOs\Payment\MethodDetailsMobilepay $mobilepay;
    public \StripeSDK\DTOs\Payment\MethodDetailsMultibanco $multibanco;
    public \StripeSDK\DTOs\Payment\MethodDetailsNaverPay $naver_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsNzBankAccount $nz_bank_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsOxxo $oxxo;
    public \StripeSDK\DTOs\Payment\MethodDetailsP24 $p24;
    public \StripeSDK\DTOs\Payment\MethodDetailsPayByBank $pay_by_bank;
    public \StripeSDK\DTOs\Payment\MethodDetailsPayco $payco;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaynow $paynow;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaypal $paypal;
    public \StripeSDK\DTOs\Payment\MethodDetailsPaypay $paypay;
    public \StripeSDK\DTOs\Payment\MethodDetailsPayto $payto;
    public \StripeSDK\DTOs\Payment\MethodDetailsPix $pix;
    public \StripeSDK\DTOs\Payment\MethodDetailsPromptpay $promptpay;
    public \StripeSDK\DTOs\Payment\MethodDetailsRevolutPay $revolut_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsSamsungPay $samsung_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsSatispay $satispay;
    public \StripeSDK\DTOs\Payment\MethodDetailsScalapay $scalapay;
    public \StripeSDK\DTOs\Payment\MethodDetailsSepaDebit $sepa_debit;
    public \StripeSDK\DTOs\Payment\MethodDetailsSequra $sequra;
    public \StripeSDK\DTOs\Payment\MethodDetailsSofort $sofort;
    public \StripeSDK\DTOs\Payment\MethodDetailsStripeAccount $stripe_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsSunbit $sunbit;
    public \StripeSDK\DTOs\Payment\MethodDetailsSwish $swish;
    public \StripeSDK\DTOs\Payment\MethodDetailsTwint $twint;
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
    public \StripeSDK\DTOs\Payment\MethodDetailsUpi $upi;
    public \StripeSDK\DTOs\Payment\MethodDetailsUsBankAccount $us_bank_account;
    public \StripeSDK\DTOs\Payment\MethodDetailsWechat $wechat;
    public \StripeSDK\DTOs\Payment\MethodDetailsWechatPay $wechat_pay;
    public \StripeSDK\DTOs\Payment\MethodDetailsZip $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach_credit_transfer' => $value instanceof \stdClass ? $this->ach_credit_transfer = new \StripeSDK\DTOs\Payment\MethodDetailsAchCreditTransfer($value) : parent::assignMember($name, $value),
            'ach_debit' => $value instanceof \stdClass ? $this->ach_debit = new \StripeSDK\DTOs\Payment\MethodDetailsAchDebit($value) : parent::assignMember($name, $value),
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Payment\MethodDetailsAcssDebit($value) : parent::assignMember($name, $value),
            'affirm' => $value instanceof \stdClass ? $this->affirm = new \StripeSDK\DTOs\Payment\MethodDetailsAffirm($value) : parent::assignMember($name, $value),
            'afterpay_clearpay' => $value instanceof \stdClass ? $this->afterpay_clearpay = new \StripeSDK\DTOs\Payment\MethodDetailsAfterpayClearpay($value) : parent::assignMember($name, $value),
            'alipay' => $value instanceof \stdClass ? $this->alipay = new \StripeSDK\DTOs\Payment\MethodDetailsAlipay($value) : parent::assignMember($name, $value),
            'alma' => $value instanceof \stdClass ? $this->alma = new \StripeSDK\DTOs\Payment\MethodDetailsAlma($value) : parent::assignMember($name, $value),
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Payment\MethodDetailsAmazonPay($value) : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Payment\MethodDetailsAuBecsDebit($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Payment\MethodDetailsBacsDebit($value) : parent::assignMember($name, $value),
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Payment\MethodDetailsBancontact($value) : parent::assignMember($name, $value),
            'billie' => $value instanceof \stdClass ? $this->billie = new \StripeSDK\DTOs\Payment\MethodDetailsBillie($value) : parent::assignMember($name, $value),
            'bizum' => $value instanceof \stdClass ? $this->bizum = new \StripeSDK\DTOs\Payment\MethodDetailsBizum($value) : parent::assignMember($name, $value),
            'blik' => $value instanceof \stdClass ? $this->blik = new \StripeSDK\DTOs\Payment\MethodDetailsBlik($value) : parent::assignMember($name, $value),
            'boleto' => $value instanceof \stdClass ? $this->boleto = new \StripeSDK\DTOs\Payment\MethodDetailsBoleto($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Payment\MethodDetailsCard($value) : parent::assignMember($name, $value),
            'card_present' => $value instanceof \stdClass ? $this->card_present = new \StripeSDK\DTOs\Payment\MethodDetailsCardPresent($value) : parent::assignMember($name, $value),
            'cashapp' => $value instanceof \stdClass ? $this->cashapp = new \StripeSDK\DTOs\Payment\MethodDetailsCashapp($value) : parent::assignMember($name, $value),
            'crypto' => $value instanceof \stdClass ? $this->crypto = new \StripeSDK\DTOs\Payment\MethodDetailsCrypto($value) : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Payment\MethodDetailsEps($value) : parent::assignMember($name, $value),
            'fpx' => $value instanceof \stdClass ? $this->fpx = new \StripeSDK\DTOs\Payment\MethodDetailsFpx($value) : parent::assignMember($name, $value),
            'giropay' => $value instanceof \stdClass ? $this->giropay = new \StripeSDK\DTOs\Payment\MethodDetailsGiropay($value) : parent::assignMember($name, $value),
            'grabpay' => $value instanceof \stdClass ? $this->grabpay = new \StripeSDK\DTOs\Payment\MethodDetailsGrabpay($value) : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Payment\MethodDetailsIdeal($value) : parent::assignMember($name, $value),
            'interac_present' => $value instanceof \stdClass ? $this->interac_present = new \StripeSDK\DTOs\Payment\MethodDetailsInteracPresent($value) : parent::assignMember($name, $value),
            'kakao_pay' => $value instanceof \stdClass ? $this->kakao_pay = new \StripeSDK\DTOs\Payment\MethodDetailsKakaoPay($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\MethodDetailsKlarna($value) : parent::assignMember($name, $value),
            'konbini' => $value instanceof \stdClass ? $this->konbini = new \StripeSDK\DTOs\Payment\MethodDetailsKonbini($value) : parent::assignMember($name, $value),
            'kr_card' => $value instanceof \stdClass ? $this->kr_card = new \StripeSDK\DTOs\Payment\MethodDetailsKrCard($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodDetailsLink($value) : parent::assignMember($name, $value),
            'mobilepay' => $value instanceof \stdClass ? $this->mobilepay = new \StripeSDK\DTOs\Payment\MethodDetailsMobilepay($value) : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\Payment\MethodDetailsMultibanco($value) : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Payment\MethodDetailsNaverPay($value) : parent::assignMember($name, $value),
            'nz_bank_account' => $value instanceof \stdClass ? $this->nz_bank_account = new \StripeSDK\DTOs\Payment\MethodDetailsNzBankAccount($value) : parent::assignMember($name, $value),
            'oxxo' => $value instanceof \stdClass ? $this->oxxo = new \StripeSDK\DTOs\Payment\MethodDetailsOxxo($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Payment\MethodDetailsP24($value) : parent::assignMember($name, $value),
            'payco' => $value instanceof \stdClass ? $this->payco = new \StripeSDK\DTOs\Payment\MethodDetailsPayco($value) : parent::assignMember($name, $value),
            'paynow' => $value instanceof \stdClass ? $this->paynow = new \StripeSDK\DTOs\Payment\MethodDetailsPaynow($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\MethodDetailsPaypal($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Payment\MethodDetailsPayto($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Payment\MethodDetailsPix($value) : parent::assignMember($name, $value),
            'promptpay' => $value instanceof \stdClass ? $this->promptpay = new \StripeSDK\DTOs\Payment\MethodDetailsPromptpay($value) : parent::assignMember($name, $value),
            'revolut_pay' => $value instanceof \stdClass ? $this->revolut_pay = new \StripeSDK\DTOs\Payment\MethodDetailsRevolutPay($value) : parent::assignMember($name, $value),
            'samsung_pay' => $value instanceof \stdClass ? $this->samsung_pay = new \StripeSDK\DTOs\Payment\MethodDetailsSamsungPay($value) : parent::assignMember($name, $value),
            'satispay' => $value instanceof \stdClass ? $this->satispay = new \StripeSDK\DTOs\Payment\MethodDetailsSatispay($value) : parent::assignMember($name, $value),
            'scalapay' => $value instanceof \stdClass ? $this->scalapay = new \StripeSDK\DTOs\Payment\MethodDetailsScalapay($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Payment\MethodDetailsSepaDebit($value) : parent::assignMember($name, $value),
            'sequra' => $value instanceof \stdClass ? $this->sequra = new \StripeSDK\DTOs\Payment\MethodDetailsSequra($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Payment\MethodDetailsSofort($value) : parent::assignMember($name, $value),
            'sunbit' => $value instanceof \stdClass ? $this->sunbit = new \StripeSDK\DTOs\Payment\MethodDetailsSunbit($value) : parent::assignMember($name, $value),
            'swish' => $value instanceof \stdClass ? $this->swish = new \StripeSDK\DTOs\Payment\MethodDetailsSwish($value) : parent::assignMember($name, $value),
            'twint' => $value instanceof \stdClass ? $this->twint = new \StripeSDK\DTOs\Payment\MethodDetailsTwint($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Payment\MethodDetailsUpi($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Payment\MethodDetailsUsBankAccount($value) : parent::assignMember($name, $value),
            'wechat_pay' => $value instanceof \stdClass ? $this->wechat_pay = new \StripeSDK\DTOs\Payment\MethodDetailsWechatPay($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
