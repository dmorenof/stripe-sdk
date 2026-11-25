<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * flow_preference
 *
 * Contains additional details on your flow preference for this 3DS Authentication.
 *
 * Refer to the [Specify a flow preference section of the standalone 3DS guide](/payments/3d-secure/standalone-3d-secure#specify-a-flow-preference) for more information.
 */
final class FlowPreferenceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FlowPreference\PreferenceChallengeRequest $challenge;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FlowPreference\DataShareRequest $data_share;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FlowPreference\PreferenceFrictionlessRequest $frictionless;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference\PreferenceTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference\PreferenceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
