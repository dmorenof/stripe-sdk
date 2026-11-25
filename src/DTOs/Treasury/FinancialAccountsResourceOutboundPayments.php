<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * OutboundPaymentsResource
 *
 * Settings related to Outbound Payments features on a Financial Account
 */
final class FinancialAccountsResourceOutboundPayments extends \Dmorenof\SdkRuntime\DTO
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
