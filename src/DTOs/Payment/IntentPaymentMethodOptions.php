<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentPaymentMethodOptions
 */
final class IntentPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AcssDebitDTO $acss_debit;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AffirmDTO $affirm;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AfterpayClearpayDTO $afterpay_clearpay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AlipayDTO $alipay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AlmaDTO $alma;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AmazonPayDTO $amazon_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BecsDebitDTO $au_becs_debit;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BacsDebitDTO $bacs_debit;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BancontactDTO $bancontact;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BillieDTO $billie;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BizumDTO $bizum;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BlikDTO $blik;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BoletoDTO $boleto;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\CardDTO $card;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\CardPresentDTO $card_present;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\CashappDTO $cashapp;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\CryptoDTO $crypto;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\CustomerBalanceDTO $customer_balance;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\EpsDTO $eps;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\FpxDTO $fpx;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\GiropayDTO $giropay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\GrabpayDTO $grabpay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\IdealDTO $ideal;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\InteracPresentDTO $interac_present;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\KakaoPayDTO $kakao_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\KlarnaDTO $klarna;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\KonbiniDTO $konbini;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\KrCardDTO $kr_card;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\LinkDTO $link;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\MbWayDTO $mb_way;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\MobilepayDTO $mobilepay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\MultibancoDTO $multibanco;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\NaverPayDTO $naver_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\BankAccountDTO $nz_bank_account;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\OxxoDTO $oxxo;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\P24DTO $p24;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\ByBankDTO $pay_by_bank;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PaycoDTO $payco;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PaynowDTO $paynow;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PaypalDTO $paypal;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PaypayDTO $paypay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PaytoDTO $payto;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PixDTO $pix;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\PromptpayDTO $promptpay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\RevolutPayDTO $revolut_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SamsungPayDTO $samsung_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SatispayDTO $satispay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\ScalapayDTO $scalapay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SepaDebitDTO $sepa_debit;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SequraDTO $sequra;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SofortDTO $sofort;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SunbitDTO $sunbit;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\SwishDTO $swish;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\TwintDTO $twint;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\UpiDTO $upi;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\AnyOfUsBankAccount\BankAccountDTO $us_bank_account;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\WechatPayDTO $wechat_pay;
    public \StripeSDK\DTOs\Payment\IntentPaymentMethodOptions\ZipDTO $zip;
}
