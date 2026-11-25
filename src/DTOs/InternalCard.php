<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * internal_card
 */
final class InternalCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'brand' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Brand of the card used in the transaction
     */
    public ?string $brand {
        set {
            $this->assigning('brand', $value);
            $this->brand = $value;
        }
    }
    /**
     * Two-letter ISO code representing the country of the card
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Two digit number representing the card's expiration month
     */
    public ?int $exp_month;
    /**
     * Two digit number representing the card's expiration year
     */
    public ?int $exp_year;
    /**
     * The last 4 digits of the card
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => $value === null || is_string($value) ? $this->brand = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'exp_month' => $value === null || is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => $value === null || is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
