<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderRequirements
 */
final class CardholderRequirements extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If `disabled_reason` is present, all cards will decline authorizations with `cardholder_verification_required` reason.
     */
    public ?\StripeSDK\Enums\Issuing\CardholderRequirements\DisabledReasonEnum $disabled_reason;
    /**
     * Array of fields that need to be collected in order to verify and re-enable the cardholder.
     */
    public ?\StripeSDK\Collections\Issuing\CardholderRequirements\PastDueCollection $past_due;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled_reason' => $value === null || is_string($value) ? $this->disabled_reason = $value === null ? null : \StripeSDK\Enums\Issuing\CardholderRequirements\DisabledReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
