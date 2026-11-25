<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonEthnicityDetails
 */
final class EthnicityDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'ethnicity_other' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The persons ethnicity
     */
    public ?\StripeSDK\Collections\Person\EthnicityDetails\EthnicityCollection $ethnicity;
    /**
     * Please specify your origin, when other is selected.
     */
    public ?string $ethnicity_other {
        set {
            $this->assigning('ethnicity_other', $value);
            $this->ethnicity_other = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ethnicity_other' => $value === null || is_string($value) ? $this->ethnicity_other = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
