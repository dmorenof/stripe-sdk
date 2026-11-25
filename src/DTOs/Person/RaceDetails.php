<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Person;

/**
 * PersonRaceDetails
 */
final class RaceDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'race_other' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The persons race.
     */
    public ?\StripeSDK\Collections\Person\RaceDetails\RaceCollection $race;
    /**
     * Please specify your race, when other is selected.
     */
    public ?string $race_other {
        set {
            $this->assigning('race_other', $value);
            $this->race_other = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'race_other' => $value === null || is_string($value) ? $this->race_other = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
