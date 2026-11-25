<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryFinancialAccountsResourceClosedStatusDetails
 */
final class FinancialAccountsResourceClosedStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reasons',
    ];

    /**
     * The array that contains reasons for a FinancialAccount closure.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccountsResourceClosedStatusDetails\ReasonsCollection $reasons;
}
