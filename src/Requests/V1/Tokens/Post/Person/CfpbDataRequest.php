<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person;

/**
 * us_cfpb_data_specs
 */
final class CfpbDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'self_identified_gender' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Tokens\Post\Person\UsCfpbData\EthnicityDetailsRequest $ethnicity_details;
    public \StripeSDK\Requests\V1\Tokens\Post\Person\UsCfpbData\RaceDetailsRequest $race_details;
    public string $self_identified_gender {
        set {
            $this->assigning('self_identified_gender', $value);
            $this->self_identified_gender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'self_identified_gender' => is_string($value) ? $this->self_identified_gender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
