<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCollectedInformation
 */
final class PagesCheckoutSessionCollectedInformation extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'business_name' => [
            'maxLength' => 5000,
        ],
        'individual_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Customer’s business name for this Checkout Session
     */
    public ?string $business_name {
        set {
            $this->assigning('business_name', $value);
            $this->business_name = $value;
        }
    }
    /**
     * Customer’s individual name for this Checkout Session
     */
    public ?string $individual_name {
        set {
            $this->assigning('individual_name', $value);
            $this->individual_name = $value;
        }
    }
    /**
     * Shipping information for this Checkout Session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCheckoutAddressDetails $shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'business_name' => $value === null || is_string($value) ? $this->business_name = $value : parent::assignMember($name, $value),
            'individual_name' => $value === null || is_string($value) ? $this->individual_name = $value : parent::assignMember($name, $value),
            'shipping_details' => $value === null || $value instanceof \stdClass ? $this->shipping_details = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCheckoutAddressDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
