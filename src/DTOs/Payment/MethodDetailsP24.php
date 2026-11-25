<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_p24
 */
final class MethodDetailsP24 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
        'verified_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's bank. Can be one of `ing`, `citi_handlowy`, `tmobile_usbugi_bankowe`, `plus_bank`, `etransfer_pocztowy24`, `banki_spbdzielcze`, `bank_nowy_bfg_sa`, `getin_bank`, `velobank`, `blik`, `noble_pay`, `ideabank`, `envelobank`, `santander_przelew24`, `nest_przelew`, `mbank_mtransfer`, `inteligo`, `pbac_z_ipko`, `bnp_paribas`, `credit_agricole`, `toyota_bank`, `bank_pekao_sa`, `volkswagen_bank`, `bank_millennium`, `alior_bank`, or `boz`.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsP24\BankEnum $bank;
    /**
     * Unique reference for this Przelewy24 payment.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Owner's verified full name. Values are verified or provided by Przelewy24 directly
     * (if supported) at the time of authorization or settlement. They cannot be set or mutated.
     * Przelewy24 rarely provides this information so the attribute is usually empty.
     */
    public ?string $verified_name {
        set {
            $this->assigning('verified_name', $value);
            $this->verified_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => $value === null || is_string($value) ? $this->bank = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsP24\BankEnum::from($value) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'verified_name' => $value === null || is_string($value) ? $this->verified_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
