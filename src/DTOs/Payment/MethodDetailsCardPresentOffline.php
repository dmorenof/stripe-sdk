<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_present_offline
 */
final class MethodDetailsCardPresentOffline extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time at which the payment was collected while offline
     * Format: unix-time
     */
    public ?int $stored_at;
    /**
     * The method used to process this payment method offline. Only deferred is allowed.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsCardPresentOffline\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'stored_at' => $value === null || is_int($value) ? $this->stored_at = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsCardPresentOffline\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
