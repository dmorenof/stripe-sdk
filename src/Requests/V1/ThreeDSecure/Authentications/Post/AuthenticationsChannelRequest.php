<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * channel
 *
 * Contains additional details on the channel used for this 3DS Authentication.
 */
final class AuthenticationsChannelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\Channel\ChannelBrowserRequest $browser;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\Channel\RIRequest $three_r_i;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel\ChannelTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel\ChannelTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
