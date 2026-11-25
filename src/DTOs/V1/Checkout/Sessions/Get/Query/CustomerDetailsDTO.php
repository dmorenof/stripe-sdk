<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Checkout\Sessions\Get\Query;

/**
 * customer_details_params
 */
final class CustomerDetailsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'email',
    ];

    public string $email;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
