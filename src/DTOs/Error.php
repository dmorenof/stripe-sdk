<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * An error response from the Stripe API
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'error',
    ];

    public \StripeSDK\DTOs\ApiErrors $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \StripeSDK\DTOs\ApiErrors($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
