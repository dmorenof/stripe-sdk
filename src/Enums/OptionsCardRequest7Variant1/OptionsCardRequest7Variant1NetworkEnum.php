<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsCardRequest7Variant1;

enum OptionsCardRequest7Variant1NetworkEnum: string
{
    case Amex = 'amex';
    case CartesBancaires = 'cartes_bancaires';
    case Diners = 'diners';
    case Discover = 'discover';
    case EftposAu = 'eftpos_au';
    case Girocard = 'girocard';
    case Interac = 'interac';
    case Jcb = 'jcb';
    case Link = 'link';
    case Mastercard = 'mastercard';
    case Unionpay = 'unionpay';
    case Unknown = 'unknown';
    case Visa = 'visa';
}
