<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_alipay_account' => [
            'maxLength' => 500,
        ],
        'default_bank_account' => [
            'maxLength' => 500,
        ],
        'default_card' => [
            'maxLength' => 500,
        ],
        'default_source' => [
            'maxLength' => 500,
        ],
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
        'phone' => [
            'maxLength' => 20,
        ],
        'source' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's address. Learn about [country-specific requirements for calculating tax](https://docs.stripe.com/invoicing/taxes?dashboard-or-api=dashboard#set-up-customer).
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\ByCustomerAddressRequest $address;
    /**
     * An integer amount in cents (or local equivalent) that represents the customer's current balance, which affect the customer's future invoices. A negative amount represents a credit that decreases the amount due on an invoice; a positive amount increases the amount due on an invoice.
     */
    public int $balance;
    /**
     * Either a token, like the ones returned by [Stripe.js](https://stripe.com/docs/js), or a dictionary containing a user's bank account details.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\BankAccountRequest $bank_account;
    /**
     * The customer's business name. This may be up to *150 characters*.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\BusinessNameRequest $business_name;
    /**
     * A token, like the ones returned by [Stripe.js](https://stripe.com/docs/js).
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\ByCustomerCardRequest $card;
    /**
     * Balance information and default balance settings for this customer.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\CashBalanceRequest $cash_balance;
    /**
     * ID of Alipay account to make the customer's new default for invoice payments.
     */
    public string $default_alipay_account {
        set {
            $this->assigning('default_alipay_account', $value);
            $this->default_alipay_account = $value;
        }
    }
    /**
     * ID of bank account to make the customer's new default for invoice payments.
     */
    public string $default_bank_account {
        set {
            $this->assigning('default_bank_account', $value);
            $this->default_bank_account = $value;
        }
    }
    /**
     * ID of card to make the customer's new default for invoice payments.
     */
    public string $default_card {
        set {
            $this->assigning('default_card', $value);
            $this->default_card = $value;
        }
    }
    /**
     * If you are using payment methods created via the PaymentMethods API, see the [invoice_settings.default_payment_method](https://docs.stripe.com/api/customers/update#update_customer-invoice_settings-default_payment_method) parameter.
     *
     * Provide the ID of a payment source already attached to this customer to make it this customer's default payment source.
     *
     * If you want to add a new payment source and make it the default, see the [source](https://docs.stripe.com/api/customers/update#update_customer-source) property.
     */
    public string $default_source {
        set {
            $this->assigning('default_source', $value);
            $this->default_source = $value;
        }
    }
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
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\IndividualNameRequest $individual_name;
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
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\InvoiceSettingsRequest $invoice_settings;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\ByCustomerMetadataRequest $metadata;
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
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\ByCustomerShippingRequest $shipping;
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * Tax details about the customer.
     */
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\ByCustomerTaxRequest $tax;
    /**
     * The customer's tax exemption. One of `none`, `exempt`, or `reverse`.
     */
    public \StripeSDK\Enums\V1\Customers\ByCustomer\Post\TaxExemptEnum $tax_exempt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance' => is_int($value) ? $this->balance = $value : parent::assignMember($name, $value),
            'default_alipay_account' => is_string($value) ? $this->default_alipay_account = $value : parent::assignMember($name, $value),
            'default_bank_account' => is_string($value) ? $this->default_bank_account = $value : parent::assignMember($name, $value),
            'default_card' => is_string($value) ? $this->default_card = $value : parent::assignMember($name, $value),
            'default_source' => is_string($value) ? $this->default_source = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoice_prefix' => is_string($value) ? $this->invoice_prefix = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_invoice_sequence' => is_int($value) ? $this->next_invoice_sequence = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'preferred_locales' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->preferred_locales = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'tax_exempt' => is_string($value) ? $this->tax_exempt = \StripeSDK\Enums\V1\Customers\ByCustomer\Post\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
