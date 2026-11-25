<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\UsCfpbData;

/**
 * us_cfpb_ethnicity_details_specs
 */
final class EthnicityDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'ethnicity_other' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\Accounts\ByAccount\People\Post\UsCfpbData\EthnicityDetails\DetailsEthnicityCollection $ethnicity;
    public string $ethnicity_other {
        set {
            $this->assigning('ethnicity_other', $value);
            $this->ethnicity_other = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ethnicity_other' => is_string($value) ? $this->ethnicity_other = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
