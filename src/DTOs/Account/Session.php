<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * Account Session
 *
 * An AccountSession allows a Connect platform to grant access to a connected account in Connect embedded components.
 *
 * We recommend that you create an AccountSession each time you need to display an embedded component
 * to your user. Do not save AccountSessions to your database as they expire relatively
 * quickly, and cannot be used more than once.
 *
 * Related guide: [Connect embedded components](https://docs.stripe.com/connect/get-started-connect-embedded-components)
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'client_secret',
        'components',
        'expires_at',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'client_secret' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the account the AccountSession was created for
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * The client secret of this AccountSession. Used on the client to set up secure access to the given `account`.
     *
     * The client secret can be used to provide access to `account` from your frontend. It should not be stored, logged, or exposed to anyone other than the connected account. Make sure that you have TLS enabled on any page that includes the client secret.
     *
     * Refer to our docs to [setup Connect embedded components](https://docs.stripe.com/connect/get-started-connect-embedded-components) and learn about how `client_secret` should be handled.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    public \StripeSDK\DTOs\ConnectEmbedded\AccountSessionCreateComponents $components;
    /**
     * The timestamp at which this AccountSession will expire.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Account\Session\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'components' => $value instanceof \stdClass ? $this->components = new \StripeSDK\DTOs\ConnectEmbedded\AccountSessionCreateComponents($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Account\Session\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
