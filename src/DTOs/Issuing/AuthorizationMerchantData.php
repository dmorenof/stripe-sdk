<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationMerchantData
 */
final class AuthorizationMerchantData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'category',
        'category_code',
        'network_id',
    ];

    protected const array VALIDATION = [
        'category' => [
            'maxLength' => 5000,
        ],
        'category_code' => [
            'maxLength' => 5000,
        ],
        'city' => [
            'maxLength' => 5000,
        ],
        'country' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'network_id' => [
            'maxLength' => 5000,
        ],
        'postal_code' => [
            'maxLength' => 5000,
        ],
        'state' => [
            'maxLength' => 5000,
        ],
        'tax_id' => [
            'maxLength' => 5000,
        ],
        'terminal_id' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A categorization of the seller's type of business. See our [merchant categories guide](https://docs.stripe.com/issuing/merchant-categories) for a list of possible values.
     */
    public string $category {
        set {
            $this->assigning('category', $value);
            $this->category = $value;
        }
    }
    /**
     * The merchant category code for the seller’s business
     */
    public string $category_code {
        set {
            $this->assigning('category_code', $value);
            $this->category_code = $value;
        }
    }
    /**
     * City where the seller is located
     */
    public ?string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Country where the seller is located
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Name of the seller
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Identifier assigned to the seller by the card network. Different card networks may assign different network_id fields to the same merchant.
     */
    public string $network_id {
        set {
            $this->assigning('network_id', $value);
            $this->network_id = $value;
        }
    }
    /**
     * Postal code where the seller is located
     */
    public ?string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }
    /**
     * State where the seller is located
     */
    public ?string $state {
        set {
            $this->assigning('state', $value);
            $this->state = $value;
        }
    }
    /**
     * The seller's tax identification number. Currently populated for French merchants only.
     */
    public ?string $tax_id {
        set {
            $this->assigning('tax_id', $value);
            $this->tax_id = $value;
        }
    }
    /**
     * An ID assigned by the seller to the location of the sale.
     */
    public ?string $terminal_id {
        set {
            $this->assigning('terminal_id', $value);
            $this->terminal_id = $value;
        }
    }
    /**
     * URL provided by the merchant on a 3DS request
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = $value : parent::assignMember($name, $value),
            'category_code' => is_string($value) ? $this->category_code = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'network_id' => is_string($value) ? $this->network_id = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'state' => $value === null || is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'tax_id' => $value === null || is_string($value) ? $this->tax_id = $value : parent::assignMember($name, $value),
            'terminal_id' => $value === null || is_string($value) ? $this->terminal_id = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
