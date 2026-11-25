<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post;

/**
 * network_data_specs
 *
 * Details about the authorization, such as identifiers, set by the card network.
 */
final class NetworkDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'acquiring_institution_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $acquiring_institution_id {
        set {
            $this->assigning('acquiring_institution_id', $value);
            $this->acquiring_institution_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquiring_institution_id' => is_string($value) ? $this->acquiring_institution_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
