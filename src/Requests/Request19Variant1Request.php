<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * item_billing_thresholds_param
 */
final class Request19Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'usage_gte',
    ];

    public int $usage_gte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'usage_gte' => is_int($value) ? $this->usage_gte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
