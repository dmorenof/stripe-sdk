<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Source\Transaction;

enum TypeEnum: string
{
    case AchCreditTransfer = 'ach_credit_transfer';
    case AchDebit = 'ach_debit';
    case Alipay = 'alipay';
    case Bancontact = 'bancontact';
    case Card = 'card';
    case CardPresent = 'card_present';
    case Eps = 'eps';
    case Giropay = 'giropay';
    case Ideal = 'ideal';
    case Klarna = 'klarna';
    case Multibanco = 'multibanco';
    case P24 = 'p24';
    case SepaDebit = 'sepa_debit';
    case Sofort = 'sofort';
    case ThreeDSecure = 'three_d_secure';
    case Wechat = 'wechat';
}
