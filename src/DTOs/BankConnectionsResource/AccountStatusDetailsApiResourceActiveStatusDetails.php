<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceAccountStatusDetailsAPIResourceActiveStatusDetails
 */
final class AccountStatusDetailsApiResourceActiveStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'action',
        'cause',
        'expected_deactivation_date',
    ];

    /**
     * The action (if any) to proactively relink the Account.
     */
    public \StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails\ActionEnum $action;
    /**
     * The underlying cause of the Account becoming inactive.
     */
    public \StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails\CauseEnum $cause;
    /**
     * When the Account is expected to become inactive, if applicable.
     * Format: unix-time
     */
    public int $expected_deactivation_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails\ActionEnum::from($value) : parent::assignMember($name, $value),
            'cause' => is_string($value) ? $this->cause = \StripeSDK\Enums\BankConnectionsResource\AccountStatusDetailsApiResourceActiveStatusDetails\CauseEnum::from($value) : parent::assignMember($name, $value),
            'expected_deactivation_date' => is_int($value) ? $this->expected_deactivation_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
