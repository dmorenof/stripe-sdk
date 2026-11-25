<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCustomerDetails
 */
final class PagesCheckoutSessionCustomerDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'business_name' => [
            'maxLength' => 150,
        ],
        'email' => [
            'maxLength' => 5000,
        ],
        'individual_name' => [
            'maxLength' => 150,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's address after a completed Checkout Session. Note: This property is populated only for sessions on or after March 30, 2022.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * The customer's business name after a completed Checkout Session.
     */
    public ?string $business_name {
        set {
            $this->assigning('business_name', $value);
            $this->business_name = $value;
        }
    }
    /**
     * The email associated with the Customer, if one exists, on the Checkout Session after a completed Checkout Session or at time of session expiry.
     * Otherwise, if the customer has consented to promotional content, this value is the most recent valid email provided by the customer on the Checkout form.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The customer's individual name after a completed Checkout Session.
     */
    public ?string $individual_name {
        set {
            $this->assigning('individual_name', $value);
            $this->individual_name = $value;
        }
    }
    /**
     * The customer's name after a completed Checkout Session. Note: This property is populated only for sessions on or after March 30, 2022.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The customer's phone number after a completed Checkout Session.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * The customer’s tax exempt status after a completed Checkout Session.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionCustomerDetails\TaxExemptEnum $tax_exempt;
    /**
     * The customer’s tax IDs after a completed Checkout Session.
     */
    public ?\StripeSDK\Collections\Payment\PagesCheckoutSessionCustomerDetails\TaxIdsCollection $tax_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'business_name' => $value === null || is_string($value) ? $this->business_name = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'individual_name' => $value === null || is_string($value) ? $this->individual_name = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'tax_exempt' => $value === null || is_string($value) ? $this->tax_exempt = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionCustomerDetails\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            'tax_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_ids = $value === null ? null : new \StripeSDK\Collections\Payment\PagesCheckoutSessionCustomerDetails\TaxIdsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\PagesCheckoutSessionTaxId::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
