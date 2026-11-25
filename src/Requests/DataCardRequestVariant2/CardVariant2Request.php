<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DataCardRequestVariant2;

/**
 * card_token
 */
final class CardVariant2Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'token',
    ];

    protected const array VALIDATION = [
        'token' => [
            'maxLength' => 5000,
        ],
    ];

    public string $token {
        set {
            $this->assigning('token', $value);
            $this->token = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
