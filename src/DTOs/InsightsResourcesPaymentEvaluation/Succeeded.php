<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Succeeded
 *
 * Details of a succeeded outcome attached to this payment evaluation.
 */
final class Succeeded extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SucceededCard $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\SucceededCard($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
