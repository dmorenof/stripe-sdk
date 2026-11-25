<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountTermsOfService
 */
final class TermsOfService extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'ip' => [
            'maxLength' => 5000,
        ],
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Unix timestamp marking when the account representative accepted the service agreement.
     */
    public ?int $date;
    /**
     * The IP address from which the account representative accepted the service agreement.
     */
    public ?string $ip {
        set {
            $this->assigning('ip', $value);
            $this->ip = $value;
        }
    }
    /**
     * The user agent of the browser from which the account representative accepted the service agreement.
     */
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => $value === null || is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'ip' => $value === null || is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
