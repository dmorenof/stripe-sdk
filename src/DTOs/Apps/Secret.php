<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Apps;

/**
 * Secret
 *
 * Secret Store is an API that allows Stripe Apps developers to securely persist secrets for use by UI Extensions and app backends.
 *
 * The primary resource in Secret Store is a `secret`. Other apps can't view secrets created by an app. Additionally, secrets are scoped to provide further permission control.
 *
 * All Dashboard users and the app backend share `account` scoped secrets. Use the `account` scope for secrets that don't change per-user, like a third-party API key.
 *
 * A `user` scoped secret is accessible by the app backend and one specific Dashboard user. Use the `user` scope for per-user secrets like per-user OAuth tokens, where different users might have different permissions.
 *
 * Related guide: [Store data between page reloads](https://docs.stripe.com/stripe-apps/store-auth-data-custom-objects)
 */
final class Secret extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'name',
        'object_',
        'scope',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'payload' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * If true, indicates that this secret has been deleted
     */
    public bool $deleted;
    /**
     * The Unix timestamp for the expiry time of the secret, after which the secret deletes.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * A name for the secret that's unique within the scope.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Apps\Secret\ObjectEnum $object_;
    /**
     * The plaintext secret value to be stored.
     */
    public ?string $payload {
        set {
            $this->assigning('payload', $value);
            $this->payload = $value;
        }
    }
    public \StripeSDK\DTOs\SecretServiceResourceScope $scope;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Apps\Secret\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payload' => $value === null || is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'scope' => $value instanceof \stdClass ? $this->scope = new \StripeSDK\DTOs\SecretServiceResourceScope($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
