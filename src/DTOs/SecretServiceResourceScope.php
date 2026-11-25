<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * SecretServiceResourceScope
 */
final class SecretServiceResourceScope extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'user' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The secret scope type.
     */
    public \StripeSDK\Enums\SecretServiceResourceScope\TypeEnum $type;
    /**
     * The user ID, if type is set to "user"
     */
    public string $user {
        set {
            $this->assigning('user', $value);
            $this->user = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SecretServiceResourceScope\TypeEnum::from($value) : parent::assignMember($name, $value),
            'user' => is_string($value) ? $this->user = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
