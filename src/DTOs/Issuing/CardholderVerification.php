<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderVerification
 */
final class CardholderVerification extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * An identifying document, either a passport or local ID card.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderIdDocument $document;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'document' => $value === null || $value instanceof \stdClass ? $this->document = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderIdDocument($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
