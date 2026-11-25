<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * address
 *
 * The shipping address requested by the cardholder. You should try to include as complete address information as possible.
 */
final class ShippingAddressRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'city' => [
            'maxLength' => 50,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'line1' => [
            'maxLength' => 50,
        ],
        'line2' => [
            'maxLength' => 50,
        ],
        'postal_code' => [
            'maxLength' => 16,
        ],
        'state' => [
            'maxLength' => 3,
        ],
    ];

    public string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public string $line1 {
        set {
            $this->assigning('line1', $value);
            $this->line1 = $value;
        }
    }
    public string $line2 {
        set {
            $this->assigning('line2', $value);
            $this->line2 = $value;
        }
    }
    public string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }
    public string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'line1' => is_string($value) ? $this->line1 = $value : parent::assignMember($name, $value),
            'line2' => is_string($value) ? $this->line2 = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
