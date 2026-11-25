<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardLifecycleControls
 */
final class CardLifecycleControls extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cancel_after',
    ];

    public \StripeSDK\DTOs\Issuing\CardLifecycleConditions $cancel_after;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cancel_after' => $value instanceof \stdClass ? $this->cancel_after = new \StripeSDK\DTOs\Issuing\CardLifecycleConditions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
