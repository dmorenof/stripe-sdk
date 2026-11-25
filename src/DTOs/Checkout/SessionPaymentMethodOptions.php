<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutSessionPaymentMethodOptions
 */
final class SessionPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Checkout\AcssDebitPaymentMethodOptions $acss_debit;
    public \StripeSDK\DTOs\Checkout\AffirmPaymentMethodOptions $affirm;
    public \StripeSDK\DTOs\Checkout\AfterpayClearpayPaymentMethodOptions $afterpay_clearpay;
    public \StripeSDK\DTOs\Checkout\AlipayPaymentMethodOptions $alipay;
    public \StripeSDK\DTOs\Checkout\AlmaPaymentMethodOptions $alma;
    public \StripeSDK\DTOs\Checkout\AmazonPayPaymentMethodOptions $amazon_pay;
    public \StripeSDK\DTOs\Checkout\AuBecsDebitPaymentMethodOptions $au_becs_debit;
    public \StripeSDK\DTOs\Checkout\BacsDebitPaymentMethodOptions $bacs_debit;
    public \StripeSDK\DTOs\Checkout\BancontactPaymentMethodOptions $bancontact;
    public \StripeSDK\DTOs\Checkout\BilliePaymentMethodOptions $billie;
    public \StripeSDK\DTOs\Checkout\BoletoPaymentMethodOptions $boleto;
    public \StripeSDK\DTOs\Checkout\CardPaymentMethodOptions $card;
    public \StripeSDK\DTOs\Checkout\CashappPaymentMethodOptions $cashapp;
    public \StripeSDK\DTOs\Checkout\CustomerBalancePaymentMethodOptions $customer_balance;
    public \StripeSDK\DTOs\Checkout\EpsPaymentMethodOptions $eps;
    public \StripeSDK\DTOs\Checkout\FpxPaymentMethodOptions $fpx;
    public \StripeSDK\DTOs\Checkout\GiropayPaymentMethodOptions $giropay;
    public \StripeSDK\DTOs\Checkout\GrabPayPaymentMethodOptions $grabpay;
    public \StripeSDK\DTOs\Checkout\IdealPaymentMethodOptions $ideal;
    public \StripeSDK\DTOs\Checkout\KakaoPayPaymentMethodOptions $kakao_pay;
    public \StripeSDK\DTOs\Checkout\KlarnaPaymentMethodOptions $klarna;
    public \StripeSDK\DTOs\Checkout\KonbiniPaymentMethodOptions $konbini;
    public \StripeSDK\DTOs\Checkout\KrCardPaymentMethodOptions $kr_card;
    public \StripeSDK\DTOs\Checkout\LinkPaymentMethodOptions $link;
    public \StripeSDK\DTOs\Checkout\MobilepayPaymentMethodOptions $mobilepay;
    public \StripeSDK\DTOs\Checkout\MultibancoPaymentMethodOptions $multibanco;
    public \StripeSDK\DTOs\Checkout\NaverPayPaymentMethodOptions $naver_pay;
    public \StripeSDK\DTOs\Checkout\OxxoPaymentMethodOptions $oxxo;
    public \StripeSDK\DTOs\Checkout\P24PaymentMethodOptions $p24;
    public \StripeSDK\DTOs\Checkout\PaycoPaymentMethodOptions $payco;
    public \StripeSDK\DTOs\Checkout\PaynowPaymentMethodOptions $paynow;
    public \StripeSDK\DTOs\Checkout\PaypalPaymentMethodOptions $paypal;
    public \StripeSDK\DTOs\Checkout\PaytoPaymentMethodOptions $payto;
    public \StripeSDK\DTOs\Checkout\PixPaymentMethodOptions $pix;
    public \StripeSDK\DTOs\Checkout\RevolutPayPaymentMethodOptions $revolut_pay;
    public \StripeSDK\DTOs\Checkout\SamsungPayPaymentMethodOptions $samsung_pay;
    public \StripeSDK\DTOs\Checkout\SatispayPaymentMethodOptions $satispay;
    public \StripeSDK\DTOs\Checkout\ScalapayPaymentMethodOptions $scalapay;
    public \StripeSDK\DTOs\Checkout\SepaDebitPaymentMethodOptions $sepa_debit;
    public \StripeSDK\DTOs\Checkout\SequraPaymentMethodOptions $sequra;
    public \StripeSDK\DTOs\Checkout\SofortPaymentMethodOptions $sofort;
    public \StripeSDK\DTOs\Checkout\SunbitPaymentMethodOptions $sunbit;
    public \StripeSDK\DTOs\Checkout\SwishPaymentMethodOptions $swish;
    public \StripeSDK\DTOs\Checkout\TwintPaymentMethodOptions $twint;
    public \StripeSDK\DTOs\Checkout\UpiPaymentMethodOptions $upi;
    public \StripeSDK\DTOs\Checkout\UsBankAccountPaymentMethodOptions $us_bank_account;
    public \StripeSDK\DTOs\Checkout\WechatPayPaymentMethodOptions $wechat_pay;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Checkout\AcssDebitPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'affirm' => $value instanceof \stdClass ? $this->affirm = new \StripeSDK\DTOs\Checkout\AffirmPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'afterpay_clearpay' => $value instanceof \stdClass ? $this->afterpay_clearpay = new \StripeSDK\DTOs\Checkout\AfterpayClearpayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'alipay' => $value instanceof \stdClass ? $this->alipay = new \StripeSDK\DTOs\Checkout\AlipayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'alma' => $value instanceof \stdClass ? $this->alma = new \StripeSDK\DTOs\Checkout\AlmaPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Checkout\AmazonPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'au_becs_debit' => $value instanceof \stdClass ? $this->au_becs_debit = new \StripeSDK\DTOs\Checkout\AuBecsDebitPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Checkout\BacsDebitPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'bancontact' => $value instanceof \stdClass ? $this->bancontact = new \StripeSDK\DTOs\Checkout\BancontactPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'billie' => $value instanceof \stdClass ? $this->billie = new \StripeSDK\DTOs\Checkout\BilliePaymentMethodOptions($value) : parent::assignMember($name, $value),
            'boleto' => $value instanceof \stdClass ? $this->boleto = new \StripeSDK\DTOs\Checkout\BoletoPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\Checkout\CardPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'cashapp' => $value instanceof \stdClass ? $this->cashapp = new \StripeSDK\DTOs\Checkout\CashappPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'customer_balance' => $value instanceof \stdClass ? $this->customer_balance = new \StripeSDK\DTOs\Checkout\CustomerBalancePaymentMethodOptions($value) : parent::assignMember($name, $value),
            'eps' => $value instanceof \stdClass ? $this->eps = new \StripeSDK\DTOs\Checkout\EpsPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'fpx' => $value instanceof \stdClass ? $this->fpx = new \StripeSDK\DTOs\Checkout\FpxPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'giropay' => $value instanceof \stdClass ? $this->giropay = new \StripeSDK\DTOs\Checkout\GiropayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'grabpay' => $value instanceof \stdClass ? $this->grabpay = new \StripeSDK\DTOs\Checkout\GrabPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'ideal' => $value instanceof \stdClass ? $this->ideal = new \StripeSDK\DTOs\Checkout\IdealPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'kakao_pay' => $value instanceof \stdClass ? $this->kakao_pay = new \StripeSDK\DTOs\Checkout\KakaoPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Checkout\KlarnaPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'konbini' => $value instanceof \stdClass ? $this->konbini = new \StripeSDK\DTOs\Checkout\KonbiniPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'kr_card' => $value instanceof \stdClass ? $this->kr_card = new \StripeSDK\DTOs\Checkout\KrCardPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Checkout\LinkPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'mobilepay' => $value instanceof \stdClass ? $this->mobilepay = new \StripeSDK\DTOs\Checkout\MobilepayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'multibanco' => $value instanceof \stdClass ? $this->multibanco = new \StripeSDK\DTOs\Checkout\MultibancoPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'naver_pay' => $value instanceof \stdClass ? $this->naver_pay = new \StripeSDK\DTOs\Checkout\NaverPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'oxxo' => $value instanceof \stdClass ? $this->oxxo = new \StripeSDK\DTOs\Checkout\OxxoPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'p24' => $value instanceof \stdClass ? $this->p24 = new \StripeSDK\DTOs\Checkout\P24PaymentMethodOptions($value) : parent::assignMember($name, $value),
            'payco' => $value instanceof \stdClass ? $this->payco = new \StripeSDK\DTOs\Checkout\PaycoPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'paynow' => $value instanceof \stdClass ? $this->paynow = new \StripeSDK\DTOs\Checkout\PaynowPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Checkout\PaypalPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'payto' => $value instanceof \stdClass ? $this->payto = new \StripeSDK\DTOs\Checkout\PaytoPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'pix' => $value instanceof \stdClass ? $this->pix = new \StripeSDK\DTOs\Checkout\PixPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'revolut_pay' => $value instanceof \stdClass ? $this->revolut_pay = new \StripeSDK\DTOs\Checkout\RevolutPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'samsung_pay' => $value instanceof \stdClass ? $this->samsung_pay = new \StripeSDK\DTOs\Checkout\SamsungPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'satispay' => $value instanceof \stdClass ? $this->satispay = new \StripeSDK\DTOs\Checkout\SatispayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'scalapay' => $value instanceof \stdClass ? $this->scalapay = new \StripeSDK\DTOs\Checkout\ScalapayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Checkout\SepaDebitPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'sequra' => $value instanceof \stdClass ? $this->sequra = new \StripeSDK\DTOs\Checkout\SequraPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'sofort' => $value instanceof \stdClass ? $this->sofort = new \StripeSDK\DTOs\Checkout\SofortPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'sunbit' => $value instanceof \stdClass ? $this->sunbit = new \StripeSDK\DTOs\Checkout\SunbitPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'swish' => $value instanceof \stdClass ? $this->swish = new \StripeSDK\DTOs\Checkout\SwishPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'twint' => $value instanceof \stdClass ? $this->twint = new \StripeSDK\DTOs\Checkout\TwintPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'upi' => $value instanceof \stdClass ? $this->upi = new \StripeSDK\DTOs\Checkout\UpiPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'us_bank_account' => $value instanceof \stdClass ? $this->us_bank_account = new \StripeSDK\DTOs\Checkout\UsBankAccountPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'wechat_pay' => $value instanceof \stdClass ? $this->wechat_pay = new \StripeSDK\DTOs\Checkout\WechatPayPaymentMethodOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
