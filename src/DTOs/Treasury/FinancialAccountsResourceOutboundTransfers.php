<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * OutboundTransfer
 *
 * OutboundTransfers contains outbound transfers features for a FinancialAccount.
 */
final class FinancialAccountsResourceOutboundTransfers extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundAchToggleSettings $ach;
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings $us_domestic_wire;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach' => $value instanceof \stdClass ? $this->ach = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceOutboundAchToggleSettings($value) : parent::assignMember($name, $value),
            'us_domestic_wire' => $value instanceof \stdClass ? $this->us_domestic_wire = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceToggleSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
