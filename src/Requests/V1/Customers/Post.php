<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'email' => [
            'maxLength' => 512,
        ],
        'invoice_prefix' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 256,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 20,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
        'test_clock' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's address. Learn about [country-specific requirements for calculating tax](https://docs.stripe.com/invoicing/taxes?dashboard-or-api=dashboard#set-up-customer).
     */
    public \StripeSDK\Requests\V1\Customers\Post\CustomersAddressRequest $address;
    /**
     * An integer amount in cents (or local equivalent) that represents the customer's current balance, which affect the customer's future invoices. A negative amount represents a credit that decreases the amount due on an invoice; a positive amount increases the amount due on an invoice.
     */
    public int $balance;
    /**
     * The customer's business name. This may be up to *150 characters*.
     */
    public \StripeSDK\Requests\V1\Customers\Post\BusinessNameRequest $business_name;
    /**
     * Balance information and default balance settings for this customer.
     */
    public \StripeSDK\Requests\V1\Customers\Post\CashBalanceRequest $cash_balance;
    /**
     * An arbitrary string that you can attach to a customer object. It is displayed alongside the customer in the dashboard.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Customer's email address. It's displayed alongside the customer in your dashboard and can be useful for searching and tracking. This may be up to *512 characters*.
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The customer's full name. This may be up to *150 characters*.
     */
    public \StripeSDK\Requests\V1\Customers\Post\IndividualNameRequest $individual_name;
    /**
     * The prefix for the customer used to generate unique invoice numbers. Must be 1–12 uppercase letters or numbers.
     */
    public string $invoice_prefix {
        set {
            $this->assigning('invoice_prefix', $value);
            $this->invoice_prefix = $value;
        }
    }
    /**
     * Default invoice settings for this customer.
     */
    public \StripeSDK\Requests\V1\Customers\Post\InvoiceSettingsRequest $invoice_settings;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Customers\Post\CustomersMetadataRequest $metadata;
    /**
     * The customer's full name or business name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The sequence to be used on the customer's next invoice. Defaults to 1.
     */
    public int $next_invoice_sequence;
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * The customer's phone number.
     */
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * Customer's preferred languages, ordered by preference.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $preferred_locales;
    /**
     * The customer's shipping information. Appears on invoices emailed to this customer.
     */
    public \StripeSDK\Requests\V1\Customers\Post\CustomersShippingRequest $shipping;
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * Tax details about the customer.
     */
    public \StripeSDK\Requests\V1\Customers\Post\CustomersTaxRequest $tax;
    /**
     * The customer's tax exemption. One of `none`, `exempt`, or `reverse`.
     */
    public \StripeSDK\Enums\V1\Customers\Post\TaxExemptEnum $tax_exempt;
    /**
     * The customer's tax IDs.
     */
    public \StripeSDK\Collections\V1\Customers\Post\IdDataCollection $tax_id_data;
    /**
     * ID of the test clock to attach to the customer.
     */
    public string $test_clock {
        set {
            $this->assigning('test_clock', $value);
            $this->test_clock = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance' => is_int($value) ? $this->balance = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoice_prefix' => is_string($value) ? $this->invoice_prefix = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_invoice_sequence' => is_int($value) ? $this->next_invoice_sequence = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'preferred_locales' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->preferred_locales = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'tax_exempt' => is_string($value) ? $this->tax_exempt = \StripeSDK\Enums\V1\Customers\Post\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            'test_clock' => is_string($value) ? $this->test_clock = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
