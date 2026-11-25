<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_mobilepay
 */
final class MethodDetailsMobilepay extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Internal card details
     */
    public ?\StripeSDK\DTOs\InternalCard $card;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'card' => $value === null || $value instanceof \stdClass ? $this->card = $value === null ? null : new \StripeSDK\DTOs\InternalCard($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
