<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * paypal_seller_protection
 */
final class PaypalSellerProtection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * An array of conditions that are covered for the transaction, if applicable.
     */
    public ?\StripeSDK\Collections\PaypalSellerProtection\DisputeCategoriesCollection $dispute_categories;
    /**
     * Indicates whether the transaction is eligible for PayPal's seller protection.
     */
    public \StripeSDK\Enums\PaypalSellerProtection\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\PaypalSellerProtection\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
