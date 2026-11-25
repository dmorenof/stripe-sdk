<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionAfterExpiration
 */
final class PagesCheckoutSessionAfterExpiration extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When set, configuration used to recover the Checkout Session on expiry.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionAfterExpirationRecovery $recovery;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recovery' => $value === null || $value instanceof \stdClass ? $this->recovery = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionAfterExpirationRecovery($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
