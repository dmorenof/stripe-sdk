<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodData\Eps;

enum EpsBankEnum: string
{
    case ArzteUndApothekerBank = 'arzte_und_apotheker_bank';
    case AustrianAnadiBankAg = 'austrian_anadi_bank_ag';
    case BankAustria = 'bank_austria';
    case BankhausCarlSpangler = 'bankhaus_carl_spangler';
    case BankhausSchelhammerUndSchatteraAg = 'bankhaus_schelhammer_und_schattera_ag';
    case BawagPskAg = 'bawag_psk_ag';
    case BksBankAg = 'bks_bank_ag';
    case BrullKallmusBankAg = 'brull_kallmus_bank_ag';
    case BtvVierLanderBank = 'btv_vier_lander_bank';
    case CapitalBankGraweGruppeAg = 'capital_bank_grawe_gruppe_ag';
    case DeutscheBankAg = 'deutsche_bank_ag';
    case Dolomitenbank = 'dolomitenbank';
    case EasybankAg = 'easybank_ag';
    case ErsteBankUndSparkassen = 'erste_bank_und_sparkassen';
    case HypoAlpeadriabankInternationalAg = 'hypo_alpeadriabank_international_ag';
    case HypoBankBurgenlandAktiengesellschaft = 'hypo_bank_burgenland_aktiengesellschaft';
    case HypoNoeLbFurNiederosterreichUWien = 'hypo_noe_lb_fur_niederosterreich_u_wien';
    case HypoOberosterreichSalzburgSteiermark = 'hypo_oberosterreich_salzburg_steiermark';
    case HypoTirolBankAg = 'hypo_tirol_bank_ag';
    case HypoVorarlbergBankAg = 'hypo_vorarlberg_bank_ag';
    case MarchfelderBank = 'marchfelder_bank';
    case OberbankAg = 'oberbank_ag';
    case RaiffeisenBankengruppeOsterreich = 'raiffeisen_bankengruppe_osterreich';
    case SchoellerbankAg = 'schoellerbank_ag';
    case SpardaBankWien = 'sparda_bank_wien';
    case VolksbankGruppe = 'volksbank_gruppe';
    case VolkskreditbankAg = 'volkskreditbank_ag';
    case VrBankBraunau = 'vr_bank_braunau';
}
