<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\InsightsResourcesPaymentEvaluation;

/**
 * Succeeded Card
 *
 * Details of an succeeded card outcome attached to this payment evaluation.
 */
final class SucceededCard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1_check',
        'address_postal_code_check',
        'cvc_check',
    ];

    /**
     * Result of the address line 1 check.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\Line1CheckEnum $address_line1_check;
    /**
     * Indicates whether the cardholder provided a postal code and if it matched the cardholder’s billing address.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\CodeCheckEnum $address_postal_code_check;
    /**
     * Result of the CVC check.
     */
    public \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\CvcCheckEnum $cvc_check;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1_check' => is_string($value) ? $this->address_line1_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\Line1CheckEnum::from($value) : parent::assignMember($name, $value),
            'address_postal_code_check' => is_string($value) ? $this->address_postal_code_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\CodeCheckEnum::from($value) : parent::assignMember($name, $value),
            'cvc_check' => is_string($value) ? $this->cvc_check = \StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SucceededCard\CvcCheckEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
