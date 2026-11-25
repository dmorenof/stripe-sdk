<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_custom
 */
final class MethodCustom extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
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
     * Display name of the Dashboard-only CustomPaymentMethodType.
     */
    public ?string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Contains information about the Dashboard-only CustomPaymentMethodType logo.
     */
    public ?\StripeSDK\DTOs\CustomLogo $logo;
    /**
     * ID of the Dashboard-only CustomPaymentMethodType. Not expandable.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => $value === null || is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'logo' => $value === null || $value instanceof \stdClass ? $this->logo = $value === null ? null : new \StripeSDK\DTOs\CustomLogo($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
