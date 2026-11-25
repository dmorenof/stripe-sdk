<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodDomain
 *
 * A payment method domain represents a web domain that you have registered with Stripe.
 * Stripe Elements use registered payment method domains to control where certain payment methods are shown.
 *
 * Related guide: [Payment method domains](https://docs.stripe.com/payments/payment-methods/pmd-registration).
 */
final class MethodDomain extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amazon_pay',
        'apple_pay',
        'created',
        'domain_name',
        'enabled',
        'google_pay',
        'id',
        'klarna',
        'link',
        'livemode',
        'object_',
        'paypal',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'domain_name' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $amazon_pay;
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $apple_pay;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The domain name that this payment method domain object represents.
     */
    public string $domain_name {
        set {
            $this->assigning('domain_name', $value);
            $this->domain_name = $value;
        }
    }
    /**
     * Whether this payment method domain is enabled. If the domain is not enabled, payment methods that require a payment method domain will not appear in Elements.
     */
    public bool $enabled;
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $google_pay;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $klarna;
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $link;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payment\MethodDomain\ObjectEnum $object_;
    public \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus $paypal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amazon_pay' => $value instanceof \stdClass ? $this->amazon_pay = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            'apple_pay' => $value instanceof \stdClass ? $this->apple_pay = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'domain_name' => is_string($value) ? $this->domain_name = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'google_pay' => $value instanceof \stdClass ? $this->google_pay = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'klarna' => $value instanceof \stdClass ? $this->klarna = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payment\MethodDomain\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'paypal' => $value instanceof \stdClass ? $this->paypal = new \StripeSDK\DTOs\Payment\MethodDomainResourcePaymentMethodStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
