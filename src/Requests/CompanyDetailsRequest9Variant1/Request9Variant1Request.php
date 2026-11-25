<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CompanyDetailsRequest9Variant1;

/**
 * company_details_param
 */
final class Request9Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'registered_name' => [
            'maxLength' => 5000,
        ],
        'registration_number' => [
            'maxLength' => 5000,
        ],
        'vat' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\CompanyDetailsRequest9Variant1\RegisteredAddressRequest $registered_address;
    public string $registered_name {
        set {
            $this->assigning('registered_name', $value);
            $this->registered_name = $value;
        }
    }
    public string $registration_number {
        set {
            $this->assigning('registration_number', $value);
            $this->registration_number = $value;
        }
    }
    public \StripeSDK\Enums\CompanyDetailsRequest9Variant1\RegistrationTypeEnum $registration_type;
    public string $vat {
        set {
            $this->assigning('vat', $value);
            $this->vat = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'registered_name' => is_string($value) ? $this->registered_name = $value : parent::assignMember($name, $value),
            'registration_number' => is_string($value) ? $this->registration_number = $value : parent::assignMember($name, $value),
            'registration_type' => is_string($value) ? $this->registration_type = \StripeSDK\Enums\CompanyDetailsRequest9Variant1\RegistrationTypeEnum::from($value) : parent::assignMember($name, $value),
            'vat' => is_string($value) ? $this->vat = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
