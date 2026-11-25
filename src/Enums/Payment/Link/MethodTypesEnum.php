<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Link;

enum MethodTypesEnum: string
{
    case Affirm = 'affirm';
    case AfterpayClearpay = 'afterpay_clearpay';
    case Alipay = 'alipay';
    case Alma = 'alma';
    case AuBecsDebit = 'au_becs_debit';
    case BacsDebit = 'bacs_debit';
    case Bancontact = 'bancontact';
    case Billie = 'billie';
    case Bizum = 'bizum';
    case Blik = 'blik';
    case Boleto = 'boleto';
    case Card = 'card';
    case Cashapp = 'cashapp';
    case Eps = 'eps';
    case Fpx = 'fpx';
    case Giropay = 'giropay';
    case Grabpay = 'grabpay';
    case Ideal = 'ideal';
    case Klarna = 'klarna';
    case Konbini = 'konbini';
    case Link = 'link';
    case MbWay = 'mb_way';
    case Mobilepay = 'mobilepay';
    case Multibanco = 'multibanco';
    case Oxxo = 'oxxo';
    case P24 = 'p24';
    case PayByBank = 'pay_by_bank';
    case Paynow = 'paynow';
    case Paypal = 'paypal';
    case Paypay = 'paypay';
    case Payto = 'payto';
    case Pix = 'pix';
    case Promptpay = 'promptpay';
    case Satispay = 'satispay';
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
