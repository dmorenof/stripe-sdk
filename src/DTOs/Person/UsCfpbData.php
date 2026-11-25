<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonUSCfpbData
 */
final class UsCfpbData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'self_identified_gender' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The persons ethnicity details
     */
    public ?\StripeSDK\DTOs\Person\EthnicityDetails $ethnicity_details;
    /**
     * The persons race details
     */
    public ?\StripeSDK\DTOs\Person\RaceDetails $race_details;
    /**
     * The persons self-identified gender
     */
    public ?string $self_identified_gender {
        set {
            $this->assigning('self_identified_gender', $value);
            $this->self_identified_gender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ethnicity_details' => $value === null || $value instanceof \stdClass ? $this->ethnicity_details = $value === null ? null : new \StripeSDK\DTOs\Person\EthnicityDetails($value) : parent::assignMember($name, $value),
            'race_details' => $value === null || $value instanceof \stdClass ? $this->race_details = $value === null ? null : new \StripeSDK\DTOs\Person\RaceDetails($value) : parent::assignMember($name, $value),
            'self_identified_gender' => $value === null || is_string($value) ? $this->self_identified_gender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
