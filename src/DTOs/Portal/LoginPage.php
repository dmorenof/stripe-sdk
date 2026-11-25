<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalLoginPage
 */
final class LoginPage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    protected const array VALIDATION = [
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If `true`, a shareable `url` will be generated that will take your customers to a hosted login page for the customer portal.
     *
     * If `false`, the previously generated `url`, if any, will be deactivated.
     */
    public bool $enabled;
    /**
     * A shareable URL to the hosted portal login page. Your customers will be able to log in with their [email](https://docs.stripe.com/api/customers/object#customer_object-email) and receive a link to their customer portal.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
