<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\UsCfpbData;

/**
 * us_cfpb_race_details_specs
 */
final class RaceDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'race_other' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\Accounts\ByAccount\People\Post\UsCfpbData\RaceDetails\DetailsRaceCollection $race;
    public string $race_other {
        set {
            $this->assigning('race_other', $value);
            $this->race_other = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'race_other' => is_string($value) ? $this->race_other = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
