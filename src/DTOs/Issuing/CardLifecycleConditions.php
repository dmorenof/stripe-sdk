<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardLifecycleConditions
 */
final class CardLifecycleConditions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_count',
    ];

    /**
     * The card is automatically cancelled when it makes this number of non-zero payment authorizations and transactions. The count includes penny authorizations, but doesn't include non-payment actions, such as authorization advice.
     */
    public int $payment_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_count' => is_int($value) ? $this->payment_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
