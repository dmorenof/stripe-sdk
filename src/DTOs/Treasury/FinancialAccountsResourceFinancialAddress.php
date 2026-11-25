<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * FinancialAddress
 *
 * FinancialAddresses contain identifying information that resolves to a FinancialAccount.
 */
final class FinancialAccountsResourceFinancialAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceAbaRecord $aba;
    /**
     * The list of networks that the address supports
     */
    public \StripeSDK\Collections\Treasury\FinancialAccountsResourceFinancialAddress\SupportedNetworksCollection $supported_networks;
    /**
     * The type of financial address
     */
    public \StripeSDK\Enums\Treasury\FinancialAccountsResourceFinancialAddress\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aba' => $value instanceof \stdClass ? $this->aba = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceAbaRecord($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\FinancialAccountsResourceFinancialAddress\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
