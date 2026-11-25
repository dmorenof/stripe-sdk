<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Rejected
 *
 * Details of an rejected outcome attached to this payment evaluation.
 */
final class Rejected extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\RejectedCard $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value instanceof \stdClass ? $this->card = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\RejectedCard($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
