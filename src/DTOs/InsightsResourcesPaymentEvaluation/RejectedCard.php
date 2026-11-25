<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Rejected Card
 *
 * Details of an rejected card outcome attached to this payment evaluation.
 */
final class RejectedCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1_check',
        'address_postal_code_check',
        'cvc_check',
        'reason',
    ];

    /**
     * Result of the address line 1 check.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\Line1CheckEnum $address_line1_check;
    /**
     * Indicates whether the cardholder provided a postal code and if it matched the cardholder’s billing address.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\CodeCheckEnum $address_postal_code_check;
    /**
     * Result of the CVC check.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\CvcCheckEnum $cvc_check;
    /**
     * Card issuer's reason for the network decline.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => is_string($value) ? $this->address_line1_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\Line1CheckEnum::from($value) : parent::assignMember($name, $value),
            'address_postal_code_check' => is_string($value) ? $this->address_postal_code_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\CodeCheckEnum::from($value) : parent::assignMember($name, $value),
            'cvc_check' => is_string($value) ? $this->cvc_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\CvcCheckEnum::from($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
