<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetails;

enum NetworkEnum: string
{
    case Amex = 'amex';
    case CartesBancaires = 'cartes_bancaires';
    case Diners = 'diners';
    case Discover = 'discover';
    case EftposAu = 'eftpos_au';
    case Interac = 'interac';
    case Jcb = 'jcb';
    case Link = 'link';
    case Mastercard = 'mastercard';
    case Unionpay = 'unionpay';
    case Unknown = 'unknown';
    case Visa = 'visa';
}
