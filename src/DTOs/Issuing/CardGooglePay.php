<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardGooglePay
 */
final class CardGooglePay extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'eligible',
    ];

    /**
     * Google Pay Eligibility
     */
    public bool $eligible;
    /**
     * Reason the card is ineligible for Google Pay
     */
    public ?\StripeSDK\Enums\Issuing\CardGooglePay\IneligibleReasonEnum $ineligible_reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eligible' => is_bool($value) ? $this->eligible = $value : parent::assignMember($name, $value),
            'ineligible_reason' => $value === null || is_string($value) ? $this->ineligible_reason = $value === null ? null : \StripeSDK\Enums\Issuing\CardGooglePay\IneligibleReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
