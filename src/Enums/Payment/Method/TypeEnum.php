<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Method;

enum TypeEnum: string
{
    case AcssDebit = 'acss_debit';
    case Affirm = 'affirm';
    case AfterpayClearpay = 'afterpay_clearpay';
    case Alipay = 'alipay';
    case Alma = 'alma';
    case AmazonPay = 'amazon_pay';
    case AuBecsDebit = 'au_becs_debit';
    case BacsDebit = 'bacs_debit';
    case Bancontact = 'bancontact';
    case Billie = 'billie';
    case Bizum = 'bizum';
    case Blik = 'blik';
    case Boleto = 'boleto';
    case Card = 'card';
    case CardPresent = 'card_present';
    case Cashapp = 'cashapp';
    case Crypto = 'crypto';
    case Custom = 'custom';
    case CustomerBalance = 'customer_balance';
    case Eps = 'eps';
    case Fpx = 'fpx';
    case Giropay = 'giropay';
    case Grabpay = 'grabpay';
    case Ideal = 'ideal';
    case InteracPresent = 'interac_present';
    case KakaoPay = 'kakao_pay';
    case Klarna = 'klarna';
    case Konbini = 'konbini';
    case KrCard = 'kr_card';
    case Link = 'link';
    case MbWay = 'mb_way';
    case Mobilepay = 'mobilepay';
    case Multibanco = 'multibanco';
    case NaverPay = 'naver_pay';
    case NzBankAccount = 'nz_bank_account';
    case Oxxo = 'oxxo';
    case P24 = 'p24';
    case PayByBank = 'pay_by_bank';
    case Payco = 'payco';
    case Paynow = 'paynow';
    case Paypal = 'paypal';
    case Paypay = 'paypay';
    case Payto = 'payto';
    case Pix = 'pix';
    case Promptpay = 'promptpay';
    case RevolutPay = 'revolut_pay';
    case SamsungPay = 'samsung_pay';
    case Satispay = 'satispay';
    case Scalapay = 'scalapay';
    case SepaDebit = 'sepa_debit';
    case Sequra = 'sequra';
    case Sofort = 'sofort';
    case Sunbit = 'sunbit';
    case Swish = 'swish';
    case Twint = 'twint';
    case Upi = 'upi';
    case UsBankAccount = 'us_bank_account';
    case WechatPay = 'wechat_pay';
    case Zip = 'zip';
}
