<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardFraudWarning
 */
final class CardFraudWarning extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp of the most recent fraud warning.
     * Format: unix-time
     */
    public ?int $started_at;
    /**
     * The type of fraud warning that most recently took place on this card. This field updates with every new fraud warning, so the value changes over time. If populated, cancel and reissue the card.
     */
    public ?\StripeSDK\Enums\Issuing\CardFraudWarning\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'started_at' => $value === null || is_int($value) ? $this->started_at = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Issuing\CardFraudWarning\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
