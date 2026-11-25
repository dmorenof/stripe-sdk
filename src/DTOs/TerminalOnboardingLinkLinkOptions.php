<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Onboarding Link Option
 *
 * Link type options associated with the current onboarding link object.
 */
final class TerminalOnboardingLinkLinkOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The options associated with the Apple Terms and Conditions link type.
     */
    public ?\StripeSDK\DTOs\TerminalOnboardingLinkAppleTermsAndConditions $apple_terms_and_conditions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apple_terms_and_conditions' => $value === null || $value instanceof \stdClass ? $this->apple_terms_and_conditions = $value === null ? null : new \StripeSDK\DTOs\TerminalOnboardingLinkAppleTermsAndConditions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
