<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Customer Session
 *
 * A Customer Session allows you to grant Stripe's frontend SDKs (like Stripe.js) client-side access
 * control over a Customer.
 *
 * Related guides: [Customer Session with the Payment Element](/payments/accept-a-payment-deferred?platform=web&type=payment#save-payment-methods),
 * [Customer Session with the Pricing Table](/payments/checkout/pricing-table#customer-session),
 * [Customer Session with the Buy Button](/payment-links/buy-button#pass-an-existing-customer).
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_secret',
        'created',
        'customer',
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
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The client secret of this Customer Session. Used on the client to set up secure access to the given `customer`.
     *
     * The client secret can be used to provide access to `customer` from your frontend. It should not be stored, logged, or exposed to anyone other than the relevant customer. Make sure that you have TLS enabled on any page that includes the client secret.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    public \StripeSDK\DTOs\Customer\SessionResourceComponents $components;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The Customer the Customer Session was created for.
     */
    public \StripeSDK\DTOs\Customer\Session\CustomerDTO $customer;
    /**
     * The Account that the Customer Session was created for.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The timestamp at which this Customer Session will expire.
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
    public \StripeSDK\Enums\Customer\Session\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'components' => $value instanceof \stdClass ? $this->components = new \StripeSDK\DTOs\Customer\SessionResourceComponents($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Customer\Session\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
