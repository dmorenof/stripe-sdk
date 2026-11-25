<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * ChannelResource
 *
 * Contains details on the channel used (browser, 3RI) for a standalone 3DS Authentication.
 */
final class Channel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\BrowserDetails $browser;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ThreeRiDetails $three_r_i;
    /**
     * Type of channel you would prefer to use for this 3DS Authentication. Only browser.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\Channel\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'browser' => $value instanceof \stdClass ? $this->browser = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\BrowserDetails($value) : parent::assignMember($name, $value),
            'three_r_i' => $value instanceof \stdClass ? $this->three_r_i = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ThreeRiDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ThreeDSecureStandaloneResource\Channel\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
