<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Login Link
 *
 * Login Links are single-use URLs that takes an Express account to the login page for their Stripe dashboard.
 * A Login Link differs from an [Account Link](https://docs.stripe.com/api/account_links) in that it takes the user directly to their [Express dashboard for the specified account](https://docs.stripe.com/connect/integrate-express-dashboard#create-login-link)
 */
final class LoginLink extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'object_',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\LoginLink\ObjectEnum $object_;
    /**
     * The URL for the login link.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\LoginLink\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
