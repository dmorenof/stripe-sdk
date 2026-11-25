<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ByCustomerCardRequestVariant1;

/**
 * source_deprecated_card_network_token
 */
final class NetworkTokenRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
