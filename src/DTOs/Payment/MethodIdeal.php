<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_ideal
 */
final class MethodIdeal extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The customer's bank, if provided. Can be one of `abn_amro`, `adyen`, `asn_bank`, `bunq`, `buut`, `finom`, `handelsbanken`, `ing`, `knab`, `mollie`, `moneyou`, `n26`, `nn`, `rabobank`, `regiobank`, `revolut`, `sns_bank`, `triodos_bank`, `van_lanschot`, or `yoursafe`.
     */
    public ?\StripeSDK\Enums\Payment\MethodIdeal\BankEnum $bank;
    /**
     * The Bank Identifier Code of the customer's bank, if the bank was provided.
     */
    public ?\StripeSDK\Enums\Payment\MethodIdeal\BicEnum $bic;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank' => $value === null || is_string($value) ? $this->bank = $value === null ? null : \StripeSDK\Enums\Payment\MethodIdeal\BankEnum::from($value) : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value === null ? null : \StripeSDK\Enums\Payment\MethodIdeal\BicEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
