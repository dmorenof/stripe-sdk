<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'account_holder_name' => [
            'maxLength' => 5000,
        ],
        'account_holder_type' => [
            'maxLength' => 5000,
        ],
        'address_city' => [
            'maxLength' => 5000,
        ],
        'address_country' => [
            'maxLength' => 5000,
        ],
        'address_line1' => [
            'maxLength' => 5000,
        ],
        'address_line2' => [
            'maxLength' => 5000,
        ],
        'address_state' => [
            'maxLength' => 5000,
        ],
        'address_zip' => [
            'maxLength' => 5000,
        ],
        'exp_month' => [
            'maxLength' => 5000,
        ],
        'exp_year' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The name of the person or business that owns the bank account.
     */
    public string $account_holder_name {
        set {
            $this->assigning('account_holder_name', $value);
            $this->account_holder_name = $value;
        }
    }
    /**
     * The type of entity that holds the account. This can be either `individual` or `company`.
     */
    public \StripeSDK\Enums\V1\Customers\ByCustomer\Cards\ById\Post\HolderTypeEnum $account_holder_type {
        set {
            $this->assigning('account_holder_type', $value);
            $this->account_holder_type = $value;
        }
    }
    /**
     * City/District/Suburb/Town/Village.
     */
    public string $address_city {
        set {
            $this->assigning('address_city', $value);
            $this->address_city = $value;
        }
    }
    /**
     * Billing address country, if provided when creating card.
     */
    public string $address_country {
        set {
            $this->assigning('address_country', $value);
            $this->address_country = $value;
        }
    }
    /**
     * Address line 1 (Street address/PO Box/Company name).
     */
    public string $address_line1 {
        set {
            $this->assigning('address_line1', $value);
            $this->address_line1 = $value;
        }
    }
    /**
     * Address line 2 (Apartment/Suite/Unit/Building).
     */
    public string $address_line2 {
        set {
            $this->assigning('address_line2', $value);
            $this->address_line2 = $value;
        }
    }
    /**
     * State/County/Province/Region.
     */
    public string $address_state {
        set {
            $this->assigning('address_state', $value);
            $this->address_state = $value;
        }
    }
    /**
     * ZIP or postal code.
     */
    public string $address_zip {
        set {
            $this->assigning('address_zip', $value);
            $this->address_zip = $value;
        }
    }
    /**
     * Two digit number representing the card’s expiration month.
     */
    public string $exp_month {
        set {
            $this->assigning('exp_month', $value);
            $this->exp_month = $value;
        }
    }
    /**
     * Four digit number representing the card’s expiration year.
     */
    public string $exp_year {
        set {
            $this->assigning('exp_year', $value);
            $this->exp_year = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Post\ByIdMetadataRequest $metadata;
    /**
     * Cardholder name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Cards\ById\Post\ByIdOwnerRequest $owner;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_holder_type' => is_string($value) ? $this->account_holder_type = \StripeSDK\Enums\V1\Customers\ByCustomer\Cards\ById\Post\HolderTypeEnum::from($value) : parent::assignMember($name, $value),
            'address_city' => is_string($value) ? $this->address_city = $value : parent::assignMember($name, $value),
            'address_country' => is_string($value) ? $this->address_country = $value : parent::assignMember($name, $value),
            'address_line1' => is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_state' => is_string($value) ? $this->address_state = $value : parent::assignMember($name, $value),
            'address_zip' => is_string($value) ? $this->address_zip = $value : parent::assignMember($name, $value),
            'exp_month' => is_string($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_string($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
