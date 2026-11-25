<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConfirmationTokensResource;

/**
 * Online
 *
 * This hash contains details about the online acceptance.
 */
final class MandateDataResourceCustomerAcceptanceResourceOnline extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'ip_address' => [
            'maxLength' => 5000,
        ],
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The IP address from which the Mandate was accepted by the customer.
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * The user agent of the browser from which the Mandate was accepted by the customer.
     */
    public ?string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'user_agent' => $value === null || is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
