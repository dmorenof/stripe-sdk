<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * klarna_address
 */
final class KlarnaAddress extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The payer address country
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
