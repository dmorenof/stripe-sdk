<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Country Spec
 *
 * Stripe needs to collect certain pieces of information about each account
 * created. These requirements can differ depending on the account's country. The
 * Country Specs API makes these rules available to your integration.
 *
 * You can also view the information from this API call as [an online
 * guide](/docs/connect/required-verification-information).
 */
final class CountrySpec extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'default_currency',
        'id',
        'object_',
        'supported_bank_account_currencies',
        'supported_payment_currencies',
        'supported_payment_methods',
        'supported_transfer_countries',
        'verification_fields',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'default_currency' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The default currency for this country. This applies to both payment methods and bank accounts.
     */
    public string $default_currency {
        set {
            $this->assigning('default_currency', $value);
            $this->default_currency = $value;
        }
    }
    /**
     * Unique identifier for the object. Represented as the ISO country code for this country.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\CountrySpec\ObjectEnum $object_;
    /**
     * Currencies that can be accepted in the specific country (for transfers).
     */
    public \StripeSDK\DTOs\CountrySpec\AccountCurrenciesMap $supported_bank_account_currencies;
    /**
     * Currencies that can be accepted in the specified country (for payments).
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $supported_payment_currencies;
    /**
     * Payment methods available in the specified country. You may need to enable some payment methods (e.g., [ACH](https://stripe.com/docs/ach)) on your account before they appear in this list. The `stripe` payment method refers to [charging through your platform](https://stripe.com/docs/connect/destination-charges).
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $supported_payment_methods;
    /**
     * Countries that can accept transfers from the specified country.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $supported_transfer_countries;
    public \StripeSDK\DTOs\CountrySpec\VerificationFields $verification_fields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_currency' => is_string($value) ? $this->default_currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\CountrySpec\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'supported_payment_currencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supported_payment_currencies = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'supported_payment_methods' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supported_payment_methods = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'supported_transfer_countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->supported_transfer_countries = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'verification_fields' => $value instanceof \stdClass ? $this->verification_fields = new \StripeSDK\DTOs\CountrySpec\VerificationFields($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
