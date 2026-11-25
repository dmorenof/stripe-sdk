<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderIndividual
 */
final class CardholderIndividual extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'first_name' => [
            'maxLength' => 5000,
        ],
        'last_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Information related to the card_issuing program for this cardholder.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderCardIssuing $card_issuing;
    /**
     * The date of birth of this cardholder.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderIndividualDob $dob;
    /**
     * The first name of this cardholder. Required before activating Cards. This field cannot contain any numbers, special characters (except periods, commas, hyphens, spaces and apostrophes) or non-latin letters.
     */
    public ?string $first_name {
        set {
            $this->assigning('first_name', $value);
            $this->first_name = $value;
        }
    }
    /**
     * The last name of this cardholder. Required before activating Cards. This field cannot contain any numbers, special characters (except periods, commas, hyphens, spaces and apostrophes) or non-latin letters.
     */
    public ?string $last_name {
        set {
            $this->assigning('last_name', $value);
            $this->last_name = $value;
        }
    }
    /**
     * Government-issued ID document for this cardholder.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderVerification $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card_issuing' => $value === null || $value instanceof \stdClass ? $this->card_issuing = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderCardIssuing($value) : parent::assignMember($name, $value),
            'dob' => $value === null || $value instanceof \stdClass ? $this->dob = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderIndividualDob($value) : parent::assignMember($name, $value),
            'first_name' => $value === null || is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => $value === null || is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'verification' => $value === null || $value instanceof \stdClass ? $this->verification = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardholderVerification($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
