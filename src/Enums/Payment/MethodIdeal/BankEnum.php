<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodIdeal;

enum BankEnum: string
{
    case AbnAmro = 'abn_amro';
    case Adyen = 'adyen';
    case AsnBank = 'asn_bank';
    case Bunq = 'bunq';
    case Buut = 'buut';
    case Finom = 'finom';
    case Handelsbanken = 'handelsbanken';
    case Ing = 'ing';
    case Knab = 'knab';
    case Mollie = 'mollie';
    case Moneyou = 'moneyou';
    case N26 = 'n26';
    case Nn = 'nn';
    case Rabobank = 'rabobank';
    case Regiobank = 'regiobank';
    case Revolut = 'revolut';
    case SnsBank = 'sns_bank';
    case TriodosBank = 'triodos_bank';
    case VanLanschot = 'van_lanschot';
    case Yoursafe = 'yoursafe';
}
