<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\Channel;

/**
 * three_ri
 */
final class RIRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'previous_authentication',
        'type',
    ];

    protected const array VALIDATION = [
        'previous_authentication' => [
            'maxLength' => 5000,
        ],
    ];

    public string $previous_authentication {
        set {
            $this->assigning('previous_authentication', $value);
            $this->previous_authentication = $value;
        }
    }
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel\ThreeRI\ITypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'previous_authentication' => is_string($value) ? $this->previous_authentication = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel\ThreeRI\ITypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
