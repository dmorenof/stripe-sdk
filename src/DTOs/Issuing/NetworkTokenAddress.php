<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingNetworkTokenAddress
 */
final class NetworkTokenAddress extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'line1',
        'postal_code',
    ];

    protected const array VALIDATION = [
        'line1' => [
            'maxLength' => 5000,
        ],
        'postal_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The street address of the cardholder tokenizing the card.
     */
    public string $line1 {
        set {
            $this->assigning('line1', $value);
            $this->line1 = $value;
        }
    }
    /**
     * The postal code of the cardholder tokenizing the card.
     */
    public string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'line1' => is_string($value) ? $this->line1 = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
