<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * FinancialAccountPlatformRestriction
 *
 * Restrictions that a Connect Platform has placed on this FinancialAccount.
 */
final class FinancialAccountsResourcePlatformRestrictions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Restricts all inbound money movement.
     */
    public ?\StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions\InboundFlowsEnum $inbound_flows;
    /**
     * Restricts all outbound money movement.
     */
    public ?\StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions\OutboundFlowsEnum $outbound_flows;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inbound_flows' => $value === null || is_string($value) ? $this->inbound_flows = $value === null ? null : \StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions\InboundFlowsEnum::from($value) : parent::assignMember($name, $value),
            'outbound_flows' => $value === null || is_string($value) ? $this->outbound_flows = $value === null ? null : \StripeSDK\Enums\Treasury\FinancialAccountsResourcePlatformRestrictions\OutboundFlowsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
