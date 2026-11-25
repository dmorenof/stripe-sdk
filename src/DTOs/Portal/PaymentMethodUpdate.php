<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalPaymentMethodUpdate
 */
final class PaymentMethodUpdate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    protected const array VALIDATION = [
        'payment_method_configuration' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the feature is enabled.
     */
    public bool $enabled;
    /**
     * The [Payment Method Configuration](/api/payment_method_configurations) to use for this portal session. When specified, customers will be able to update their payment method to one of the options specified by the payment method configuration. If not set, the default payment method configuration is used.
     */
    public ?string $payment_method_configuration {
        set {
            $this->assigning('payment_method_configuration', $value);
            $this->payment_method_configuration = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'payment_method_configuration' => $value === null || is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
