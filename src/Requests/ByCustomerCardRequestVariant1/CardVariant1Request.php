<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ByCustomerCardRequestVariant1;

/**
 * customer_payment_source_card
 */
final class CardVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'exp_month',
        'exp_year',
        'number',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
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
        'cvc' => [
            'maxLength' => 5000,
        ],
        'encrypted' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'object_' => [
            'maxLength' => 5000,
        ],
        'swipe_data' => [
            'maxLength' => 5000,
        ],
    ];

    public string $address_city {
        set {
            $this->assigning('address_city', $value);
            $this->address_city = $value;
        }
    }
    public string $address_country {
        set {
            $this->assigning('address_country', $value);
            $this->address_country = $value;
        }
    }
    public string $address_line1 {
        set {
            $this->assigning('address_line1', $value);
            $this->address_line1 = $value;
        }
    }
    public string $address_line2 {
        set {
            $this->assigning('address_line2', $value);
            $this->address_line2 = $value;
        }
    }
    public string $address_state {
        set {
            $this->assigning('address_state', $value);
            $this->address_state = $value;
        }
    }
    public string $address_zip {
        set {
            $this->assigning('address_zip', $value);
            $this->address_zip = $value;
        }
    }
    public string $cvc {
        set {
            $this->assigning('cvc', $value);
            $this->cvc = $value;
        }
    }
    public string $encrypted {
        set {
            $this->assigning('encrypted', $value);
            $this->encrypted = $value;
        }
    }
    public int $exp_month;
    public int $exp_year;
    public \StripeSDK\Requests\ByCustomerCardRequestVariant1\MetadataMapRequest $metadata;
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \StripeSDK\Requests\ByCustomerCardRequestVariant1\NetworkTokenRequest $network_token;
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    public \StripeSDK\Enums\ByCustomerCardRequestVariant1\ByCustomerCardRequestVariant1ObjectEnum $object_ {
        set {
            $this->assigning('object_', $value);
            $this->object_ = $value;
        }
    }
    public string $swipe_data {
        set {
            $this->assigning('swipe_data', $value);
            $this->swipe_data = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_city' => is_string($value) ? $this->address_city = $value : parent::assignMember($name, $value),
            'address_country' => is_string($value) ? $this->address_country = $value : parent::assignMember($name, $value),
            'address_line1' => is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_state' => is_string($value) ? $this->address_state = $value : parent::assignMember($name, $value),
            'address_zip' => is_string($value) ? $this->address_zip = $value : parent::assignMember($name, $value),
            'cvc' => is_string($value) ? $this->cvc = $value : parent::assignMember($name, $value),
            'encrypted' => is_string($value) ? $this->encrypted = $value : parent::assignMember($name, $value),
            'exp_month' => is_int($value) ? $this->exp_month = $value : parent::assignMember($name, $value),
            'exp_year' => is_int($value) ? $this->exp_year = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ByCustomerCardRequestVariant1\ByCustomerCardRequestVariant1ObjectEnum::from($value) : parent::assignMember($name, $value),
            'swipe_data' => is_string($value) ? $this->swipe_data = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
