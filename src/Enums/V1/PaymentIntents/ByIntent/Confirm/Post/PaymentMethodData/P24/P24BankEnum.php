<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodData\P24;

enum P24BankEnum: string
{
    case AliorBank = 'alior_bank';
    case BankMillennium = 'bank_millennium';
    case BankNowyBfgSa = 'bank_nowy_bfg_sa';
    case BankPekaoSa = 'bank_pekao_sa';
    case BankiSpbdzielcze = 'banki_spbdzielcze';
    case Blik = 'blik';
    case BnpParibas = 'bnp_paribas';
    case Boz = 'boz';
    case CitiHandlowy = 'citi_handlowy';
    case CreditAgricole = 'credit_agricole';
    case Envelobank = 'envelobank';
    case EtransferPocztowy24 = 'etransfer_pocztowy24';
    case GetinBank = 'getin_bank';
    case Ideabank = 'ideabank';
    case Ing = 'ing';
    case Inteligo = 'inteligo';
    case MbankMtransfer = 'mbank_mtransfer';
    case NestPrzelew = 'nest_przelew';
    case NoblePay = 'noble_pay';
    case PbacZIpko = 'pbac_z_ipko';
    case PlusBank = 'plus_bank';
    case SantanderPrzelew24 = 'santander_przelew24';
    case TmobileUsbugiBankowe = 'tmobile_usbugi_bankowe';
    case ToyotaBank = 'toyota_bank';
    case Velobank = 'velobank';
    case VolkswagenBank = 'volkswagen_bank';
}
