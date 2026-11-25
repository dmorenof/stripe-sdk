<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * subscription_payment_method_options_billie_company_details
 */
final class PaymentMethodOptionsBillieCompanyDetails extends \Dmorenof\SdkRuntime\DTO
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

    public \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillieCompanyDetailsRegisteredAddress $registered_address;
    /**
     * Company or entity name.
     */
    public ?string $registered_name {
        set {
            $this->assigning('registered_name', $value);
            $this->registered_name = $value;
        }
    }
    /**
     * The official registration number for the given registration type.
     */
    public ?string $registration_number {
        set {
            $this->assigning('registration_number', $value);
            $this->registration_number = $value;
        }
    }
    /**
     * Type of registration the company or entity holds in their registered country.
     */
    public \StripeSDK\Enums\Subscription\PaymentMethodOptionsBillieCompanyDetails\RegistrationTypeEnum $registration_type;
    /**
     * VAT ID number.
     */
    public ?string $vat {
        set {
            $this->assigning('vat', $value);
            $this->vat = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'registered_address' => $value instanceof \stdClass ? $this->registered_address = new \StripeSDK\DTOs\Subscription\PaymentMethodOptionsBillieCompanyDetailsRegisteredAddress($value) : parent::assignMember($name, $value),
            'registered_name' => $value === null || is_string($value) ? $this->registered_name = $value : parent::assignMember($name, $value),
            'registration_number' => $value === null || is_string($value) ? $this->registration_number = $value : parent::assignMember($name, $value),
            'registration_type' => is_string($value) ? $this->registration_type = \StripeSDK\Enums\Subscription\PaymentMethodOptionsBillieCompanyDetails\RegistrationTypeEnum::from($value) : parent::assignMember($name, $value),
            'vat' => $value === null || is_string($value) ? $this->vat = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
