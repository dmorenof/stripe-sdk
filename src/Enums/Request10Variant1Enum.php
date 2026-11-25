<?php

declare(strict_types=1);

namespace StripeSDK\Enums;

enum Request10Variant1Enum: string
{
    case AchCreditTransfer = 'ach_credit_transfer';
    case AchDebit = 'ach_debit';
    case AcssDebit = 'acss_debit';
    case Affirm = 'affirm';
    case Alipay = 'alipay';
    case AmazonPay = 'amazon_pay';
    case AuBecsDebit = 'au_becs_debit';
    case BacsDebit = 'bacs_debit';
    case Bancontact = 'bancontact';
    case Billie = 'billie';
    case Blik = 'blik';
    case Boleto = 'boleto';
    case Card = 'card';
    case Cashapp = 'cashapp';
    case Crypto = 'crypto';
    case Custom = 'custom';
    case CustomerBalance = 'customer_balance';
    case Eps = 'eps';
    case Fpx = 'fpx';
    case Giropay = 'giropay';
    case Grabpay = 'grabpay';
    case Ideal = 'ideal';
    case JpCreditTransfer = 'jp_credit_transfer';
    case KakaoPay = 'kakao_pay';
    case Klarna = 'klarna';
    case Konbini = 'konbini';
    case KrCard = 'kr_card';
    case Link = 'link';
    case MbWay = 'mb_way';
    case Multibanco = 'multibanco';
    case NaverPay = 'naver_pay';
    case NzBankAccount = 'nz_bank_account';
    case P24 = 'p24';
    case PayByBank = 'pay_by_bank';
    case Payco = 'payco';
    case Paynow = 'paynow';
    case Paypal = 'paypal';
    case Payto = 'payto';
    case Pix = 'pix';
    case Promptpay = 'promptpay';
    case RevolutPay = 'revolut_pay';
    case Satispay = 'satispay';
    case SepaCreditTransfer = 'sepa_credit_transfer';
    case SepaDebit = 'sepa_debit';
    case Sofort = 'sofort';
    case Swish = 'swish';
    case Twint = 'twint';
    case Upi = 'upi';
    case UsBankAccount = 'us_bank_account';
    case WechatPay = 'wechat_pay';
}
