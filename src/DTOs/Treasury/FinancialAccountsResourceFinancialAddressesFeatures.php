<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * FinancialAddressesFeaturesResource
 *
 * Settings related to Financial Addresses features on a Financial Account
 */
final class FinancialAccountsResourceFinancialAddressesFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceAbaToggleSettings $aba;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aba' => $value instanceof \stdClass ? $this->aba = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceAbaToggleSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
