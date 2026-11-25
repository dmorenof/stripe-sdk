<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Terminal;

/**
 * Connection Token
 *
 * A Connection Token is used by the Stripe Terminal SDK to connect to a reader.
 *
 * Related guide: [Fleet management](https://docs.stripe.com/terminal/fleet/locations)
 */
final class ConnectionToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'object_',
        'secret',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'location' => [
            'maxLength' => 5000,
        ],
        'secret' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The id of the location that this connection token is scoped to. Note that location scoping only applies to internet-connected readers. For more details, see [the docs on scoping connection tokens](https://docs.stripe.com/terminal/fleet/locations-and-zones?dashboard-or-api=api#connection-tokens).
     */
    public string $location {
        set {
            $this->assigning('location', $value);
            $this->location = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Terminal\ConnectionToken\ObjectEnum $object_;
    /**
     * Your application should pass this token to the Stripe Terminal SDK.
     */
    public string $secret {
        set {
            $this->assigning('secret', $value);
            $this->secret = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location' => is_string($value) ? $this->location = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Terminal\ConnectionToken\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'secret' => is_string($value) ? $this->secret = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
