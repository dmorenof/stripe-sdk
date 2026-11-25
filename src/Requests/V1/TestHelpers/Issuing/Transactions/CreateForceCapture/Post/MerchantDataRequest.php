<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateForceCapture\Post;

/**
 * merchant_data_specs
 *
 * Details about the seller (grocery store, e-commerce website, etc.) where the card authorization happened.
 */
final class MerchantDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'category' => [
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
        'terminal_id' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Transactions\CreateForceCapture\Post\MerchantData\DataCategoryEnum $category {
        set {
            $this->assigning('category', $value);
            $this->category = $value;
        }
    }
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
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public string $network_id {
        set {
            $this->assigning('network_id', $value);
            $this->network_id = $value;
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
    public string $terminal_id {
        set {
            $this->assigning('terminal_id', $value);
            $this->terminal_id = $value;
        }
    }
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'category' => is_string($value) ? $this->category = \StripeSDK\Enums\V1\TestHelpers\Issuing\Transactions\CreateForceCapture\Post\MerchantData\DataCategoryEnum::from($value) : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'network_id' => is_string($value) ? $this->network_id = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'terminal_id' => is_string($value) ? $this->terminal_id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
