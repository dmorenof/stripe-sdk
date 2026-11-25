<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_eps
 */
final class MethodEps extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The customer's bank. Should be one of `arzte_und_apotheker_bank`, `austrian_anadi_bank_ag`, `bank_austria`, `bankhaus_carl_spangler`, `bankhaus_schelhammer_und_schattera_ag`, `bawag_psk_ag`, `bks_bank_ag`, `brull_kallmus_bank_ag`, `btv_vier_lander_bank`, `capital_bank_grawe_gruppe_ag`, `deutsche_bank_ag`, `dolomitenbank`, `easybank_ag`, `erste_bank_und_sparkassen`, `hypo_alpeadriabank_international_ag`, `hypo_noe_lb_fur_niederosterreich_u_wien`, `hypo_oberosterreich_salzburg_steiermark`, `hypo_tirol_bank_ag`, `hypo_vorarlberg_bank_ag`, `hypo_bank_burgenland_aktiengesellschaft`, `marchfelder_bank`, `oberbank_ag`, `raiffeisen_bankengruppe_osterreich`, `schoellerbank_ag`, `sparda_bank_wien`, `volksbank_gruppe`, `volkskreditbank_ag`, or `vr_bank_braunau`.
     */
    public ?\StripeSDK\Enums\Payment\MethodEps\BankEnum $bank;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => $value === null || is_string($value) ? $this->bank = $value === null ? null : \StripeSDK\Enums\Payment\MethodEps\BankEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
