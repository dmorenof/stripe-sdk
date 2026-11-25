<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentMethodConfigBizPaymentMethodConfigurationDetails
 */
final class MethodConfigBizPaymentMethodConfigurationDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array PROPERTY_MAP = [
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'parent_' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of the payment method configuration used.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * ID of the parent payment method configuration used.
     */
    public ?string $parent_ {
        set {
            $this->assigning('parent_', $value);
            $this->parent_ = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'parent' => $value === null || is_string($value) ? $this->parent_ = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
