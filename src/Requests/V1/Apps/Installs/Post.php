<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Apps\Installs;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'app',
    ];

    protected const array VALIDATION = [
        'app' => [
            'maxLength' => 5000,
        ],
        'code_challenge' => [
            'maxLength' => 5000,
        ],
        'code_challenge_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the app to install.
     */
    public string $app {
        set {
            $this->assigning('app', $value);
            $this->app = $value;
        }
    }
    /**
     * The distribution channel to install from. Defaults to `public`. A private app must be installed on `private_test` or `private_live`, matching the mode of the API key.
     */
    public \StripeSDK\Enums\V1\Apps\Installs\Post\InstallsChannelEnum $channel;
    /**
     * For OAuth apps, the PKCE code challenge used to issue the `auth_code` returned on the install. Must be 43 to 128 characters and contain only letters, numbers, `-`, `.`, `_`, and `~`. Only applies to installs made by the app developer or an embedding platform; ignored when an account installs its own private app.
     */
    public string $code_challenge {
        set {
            $this->assigning('code_challenge', $value);
            $this->code_challenge = $value;
        }
    }
    /**
     * The method used to derive `code_challenge`. Required when `code_challenge` is provided, and must be `S256`.
     */
    public string $code_challenge_method {
        set {
            $this->assigning('code_challenge_method', $value);
            $this->code_challenge_method = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'app' => is_string($value) ? $this->app = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \StripeSDK\Enums\V1\Apps\Installs\Post\InstallsChannelEnum::from($value) : parent::assignMember($name, $value),
            'code_challenge' => is_string($value) ? $this->code_challenge = $value : parent::assignMember($name, $value),
            'code_challenge_method' => is_string($value) ? $this->code_challenge_method = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
