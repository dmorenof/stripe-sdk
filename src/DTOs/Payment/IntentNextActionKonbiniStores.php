<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_intent_next_action_konbini_stores
 */
final class IntentNextActionKonbiniStores extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * FamilyMart instruction details.
     */
    public ?\StripeSDK\DTOs\Payment\IntentNextActionKonbiniFamilymart $familymart;
    /**
     * Lawson instruction details.
     */
    public ?\StripeSDK\DTOs\Payment\IntentNextActionKonbiniLawson $lawson;
    /**
     * Ministop instruction details.
     */
    public ?\StripeSDK\DTOs\Payment\IntentNextActionKonbiniMinistop $ministop;
    /**
     * Seicomart instruction details.
     */
    public ?\StripeSDK\DTOs\Payment\IntentNextActionKonbiniSeicomart $seicomart;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'familymart' => $value === null || $value instanceof \stdClass ? $this->familymart = $value === null ? null : new \StripeSDK\DTOs\Payment\IntentNextActionKonbiniFamilymart($value) : parent::assignMember($name, $value),
            'lawson' => $value === null || $value instanceof \stdClass ? $this->lawson = $value === null ? null : new \StripeSDK\DTOs\Payment\IntentNextActionKonbiniLawson($value) : parent::assignMember($name, $value),
            'ministop' => $value === null || $value instanceof \stdClass ? $this->ministop = $value === null ? null : new \StripeSDK\DTOs\Payment\IntentNextActionKonbiniMinistop($value) : parent::assignMember($name, $value),
            'seicomart' => $value === null || $value instanceof \stdClass ? $this->seicomart = $value === null ? null : new \StripeSDK\DTOs\Payment\IntentNextActionKonbiniSeicomart($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
