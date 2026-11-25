<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardApplePay
 */
final class CardApplePay extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'eligible',
    ];

    /**
     * Apple Pay Eligibility
     */
    public bool $eligible;
    /**
     * Reason the card is ineligible for Apple Pay
     */
    public ?\StripeSDK\Enums\Issuing\CardApplePay\IneligibleReasonEnum $ineligible_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eligible' => is_bool($value) ? $this->eligible = $value : parent::assignMember($name, $value),
            'ineligible_reason' => $value === null || is_string($value) ? $this->ineligible_reason = $value === null ? null : \StripeSDK\Enums\Issuing\CardApplePay\IneligibleReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
