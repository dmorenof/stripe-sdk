<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountPaypaySiteInDevelopmentSettings
 */
final class PaypaySiteInDevelopmentSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'username' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Field to indicate that the website password has been provided.
     */
    public bool $password_provided;
    /**
     * The username needed to access your business's website.
     */
    public ?string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'password_provided' => is_bool($value) ? $this->password_provided = $value : parent::assignMember($name, $value),
            'username' => $value === null || is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
