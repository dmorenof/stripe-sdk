<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Onboarding Link Options, Apple Terms and Condition
 *
 * Options associated with the Apple Terms and Conditions link type.
 */
final class TerminalOnboardingLinkAppleTermsAndConditions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'merchant_display_name',
    ];

    protected const array VALIDATION = [
        'merchant_display_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the link should also support users relinking their Apple account.
     */
    public ?bool $allow_relinking;
    /**
     * The business name of the merchant accepting Apple's Terms and Conditions.
     */
    public string $merchant_display_name {
        set {
            $this->assigning('merchant_display_name', $value);
            $this->merchant_display_name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_relinking' => $value === null || is_bool($value) ? $this->allow_relinking = $value : parent::assignMember($name, $value),
            'merchant_display_name' => is_string($value) ? $this->merchant_display_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
