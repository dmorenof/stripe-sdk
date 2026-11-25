<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod;

/**
 * Custom payment method detail
 *
 * Custom Payment Methods represent Payment Method types not modeled directly in
 * the Stripe API. This resource consists of details about the custom payment method
 * used for this payment attempt.
 */
final class CustomDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'display_name',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Display name for the custom (user-defined) payment method type used to make this payment.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The custom payment method type associated with this payment.
     */
    public ?string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
