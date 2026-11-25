<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * FlowPreferenceResource
 *
 * Contains details of the flow preference used for a standalone 3DS Authentication.
 */
final class FlowPreference extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ChallengeDetails $challenge;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\DataShareDetails $data_share;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FrictionlessDetails $frictionless;
    /**
     * Type of flow you requested for this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\FlowPreference\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'challenge' => $value instanceof \stdClass ? $this->challenge = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ChallengeDetails($value) : parent::assignMember($name, $value),
            'data_share' => $value instanceof \stdClass ? $this->data_share = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\DataShareDetails($value) : parent::assignMember($name, $value),
            'frictionless' => $value instanceof \stdClass ? $this->frictionless = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FrictionlessDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\FlowPreference\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
