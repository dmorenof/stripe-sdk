<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionPermissions
 */
final class PagesCheckoutSessionPermissions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Determines which entity is allowed to update the shipping details.
     *
     * Default is `client_only`. Stripe Checkout client will automatically update the shipping details. If set to `server_only`, only your server is allowed to update the shipping details.
     *
     * This parameter is only supported when `ui_mode=elements`.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionPermissions\ShippingDetailsEnum $update_shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'update_shipping_details' => $value === null || is_string($value) ? $this->update_shipping_details = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionPermissions\ShippingDetailsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
