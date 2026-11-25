<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderCardIssuing
 */
final class CardholderCardIssuing extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Information about cardholder acceptance of Celtic [Authorized User Terms](https://docs.stripe.com/issuing/compliance-us#issuing-terms). Required for cards backed by a Celtic program.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderUserTermsAcceptance $user_terms_acceptance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'user_terms_acceptance' => $value === null || $value instanceof \stdClass ? $this->user_terms_acceptance = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderUserTermsAcceptance($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
