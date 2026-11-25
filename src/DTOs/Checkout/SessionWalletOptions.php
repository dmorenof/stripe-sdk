<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutSessionWalletOptions
 */
final class SessionWalletOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Checkout\LinkWalletOptions $link;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'link' => $value instanceof \stdClass ? $this->link = new \StripeSDK\DTOs\Checkout\LinkWalletOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
