<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post\PaymentMethodData\Fpx;

enum FpxBankEnum: string
{
    case AffinBank = 'affin_bank';
    case Agrobank = 'agrobank';
    case AllianceBank = 'alliance_bank';
    case Ambank = 'ambank';
    case BankIslam = 'bank_islam';
    case BankMuamalat = 'bank_muamalat';
    case BankOfChina = 'bank_of_china';
    case BankRakyat = 'bank_rakyat';
    case BnpParibas = 'bnp_paribas';
    case Bsn = 'bsn';
    case Cimb = 'cimb';
    case Citibank = 'citibank';
    case DeutscheBank = 'deutsche_bank';
    case HongLeongBank = 'hong_leong_bank';
    case Hsbc = 'hsbc';
    case Kfh = 'kfh';
    case Maybank2e = 'maybank2e';
    case Maybank2u = 'maybank2u';
    case MbsbBank = 'mbsb_bank';
    case Ocbc = 'ocbc';
    case PbEnterprise = 'pb_enterprise';
    case PublicBank = 'public_bank';
    case Rhb = 'rhb';
    case StandardChartered = 'standard_chartered';
    case Uob = 'uob';
}
