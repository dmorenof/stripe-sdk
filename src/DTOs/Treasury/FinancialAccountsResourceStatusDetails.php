<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryFinancialAccountsResourceStatusDetails
 */
final class FinancialAccountsResourceStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Details related to the closure of this FinancialAccount
     */
    public ?\StripeSDK\DTOs\Treasury\FinancialAccountsResourceClosedStatusDetails $closed;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'closed' => $value === null || $value instanceof \stdClass ? $this->closed = $value === null ? null : new \StripeSDK\DTOs\Treasury\FinancialAccountsResourceClosedStatusDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
