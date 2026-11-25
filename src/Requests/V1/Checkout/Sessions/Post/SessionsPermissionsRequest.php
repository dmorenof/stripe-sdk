<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * permissions_param
 *
 * This property is used to set up permissions for various actions (for example, update) on the CheckoutSession object. Can only be set when creating `embedded_page` or `elements` sessions.
 *
 * For specific permissions, please refer to their dedicated subsections, such as `permissions.update_shipping_details`.
 */
final class SessionsPermissionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\Permissions\ShippingDetailsEnum $update_shipping_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'update_shipping_details' => is_string($value) ? $this->update_shipping_details = \StripeSDK\Enums\V1\Checkout\Sessions\Post\Permissions\ShippingDetailsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
