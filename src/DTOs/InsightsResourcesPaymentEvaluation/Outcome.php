<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Outcome
 *
 * Outcome details for this payment evaluation.
 */
final class Outcome extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'payment_intent_id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MerchantBlocked $merchant_blocked;
    /**
     * The PaymentIntent ID associated with the payment evaluation.
     */
    public string $payment_intent_id {
        set {
            $this->assigning('payment_intent_id', $value);
            $this->payment_intent_id = $value;
        }
    }
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Rejected $rejected;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Succeeded $succeeded;
    /**
     * Indicates the outcome of the payment evaluation.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Outcome\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'merchant_blocked' => $value instanceof \stdClass ? $this->merchant_blocked = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\MerchantBlocked($value) : parent::assignMember($name, $value),
            'payment_intent_id' => is_string($value) ? $this->payment_intent_id = $value : parent::assignMember($name, $value),
            'rejected' => $value instanceof \stdClass ? $this->rejected = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Rejected($value) : parent::assignMember($name, $value),
            'succeeded' => $value instanceof \stdClass ? $this->succeeded = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Succeeded($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Outcome\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
