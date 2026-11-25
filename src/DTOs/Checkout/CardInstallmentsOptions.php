<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutCardInstallmentsOptions
 */
final class CardInstallmentsOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates if installments are enabled
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
