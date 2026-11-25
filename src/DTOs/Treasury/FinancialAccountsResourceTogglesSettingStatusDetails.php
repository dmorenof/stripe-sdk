<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * StatusDetailsResource
 *
 * Additional details on the FinancialAccount Features information.
 */
final class FinancialAccountsResourceTogglesSettingStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
    ];

    /**
     * Represents the reason why the status is `pending` or `restricted`.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\CodeEnum $code;
    /**
     * Represents what the user should do, if anything, to activate the Feature.
     */
    public ?\StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\ResolutionEnum $resolution;
    /**
     * The `platform_restrictions` that are restricting this Feature.
     */
    public \StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\RestrictionEnum $restriction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\CodeEnum::from($value) : parent::assignMember($name, $value),
            'resolution' => $value === null || is_string($value) ? $this->resolution = $value === null ? null : \StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\ResolutionEnum::from($value) : parent::assignMember($name, $value),
            'restriction' => is_string($value) ? $this->restriction = \StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails\RestrictionEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
