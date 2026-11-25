<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryFinancialAccountsResourceInboundAchToggleSettings
 *
 * Toggle settings for enabling/disabling an inbound ACH specific feature
 */
final class FinancialAccountsResourceInboundAchToggleSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requested',
        'status',
        'status_details',
    ];

    /**
     * Whether the FinancialAccount should have the Feature.
     */
    public bool $requested;
    /**
     * Whether the Feature is operational.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccountsResourceInboundAchToggleSettings\StatusEnum $status;
    /**
     * Additional details; includes at least one entry when the status is not `active`.
     */
    public \StripeSDK\Collections\Treasury\FinancialAccountsResourceAbaToggleSettings\StatusDetailsCollection $status_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requested' => is_bool($value) ? $this->requested = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Treasury\FinancialAccountsResourceInboundAchToggleSettings\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->status_details = new \StripeSDK\Collections\Treasury\FinancialAccountsResourceAbaToggleSettings\StatusDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
