<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\Post\LifecycleControls;

/**
 * lifecycle_conditions_param
 */
final class CancelAfterRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_count',
    ];

    public int $payment_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payment_count' => is_int($value) ? $this->payment_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
