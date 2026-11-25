<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Gelato;

/**
 * GelatoProvidedDetails
 */
final class ProvidedDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'email' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Email of user being verified
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Phone number of user being verified
     */
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
