<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Settings\PaypayPayments\Site;

/**
 * paypay_site_in_development_specs
 */
final class InDevelopmentRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
    ];

    protected const array VALIDATION = [
        'password' => [
            'maxLength' => 5000,
        ],
        'username' => [
            'maxLength' => 5000,
        ],
    ];

    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
