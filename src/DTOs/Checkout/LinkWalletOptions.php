<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutLinkWalletOptions
 */
final class LinkWalletOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Describes whether Checkout should display Link. Defaults to `auto`.
     */
    public \StripeSDK\Enums\Checkout\LinkWalletOptions\DisplayEnum $display;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display' => is_string($value) ? $this->display = \StripeSDK\Enums\Checkout\LinkWalletOptions\DisplayEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
