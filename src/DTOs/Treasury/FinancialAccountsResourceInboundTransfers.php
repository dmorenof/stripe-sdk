<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * InboundTransfer
 *
 * InboundTransfers contains inbound transfers features for a FinancialAccount.
 */
final class FinancialAccountsResourceInboundTransfers extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Treasury\FinancialAccountsResourceInboundAchToggleSettings $ach;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach' => $value instanceof \stdClass ? $this->ach = new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceInboundAchToggleSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
