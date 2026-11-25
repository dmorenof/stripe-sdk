<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeVisaCompellingEvidence3PriorUndisputedTransaction
 */
final class VisaCompellingEvidence3PriorUndisputedTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'charge',
    ];

    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
        'customer_account_id' => [
            'maxLength' => 5000,
        ],
        'customer_device_fingerprint' => [
            'maxLength' => 5000,
        ],
        'customer_device_id' => [
            'maxLength' => 5000,
        ],
        'customer_email_address' => [
            'maxLength' => 5000,
        ],
        'customer_purchase_ip' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 150000,
        ],
    ];

    /**
     * Stripe charge ID for the Visa Compelling Evidence 3.0 eligible prior charge.
     */
    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * User Account ID used to log into business platform. Must be recognizable by the user.
     */
    public ?string $customer_account_id {
        set {
            $this->assigning('customer_account_id', $value);
            $this->customer_account_id = $value;
        }
    }
    /**
     * Unique identifier of the cardholder’s device derived from a combination of at least two hardware and software attributes. Must be at least 20 characters.
     */
    public ?string $customer_device_fingerprint {
        set {
            $this->assigning('customer_device_fingerprint', $value);
            $this->customer_device_fingerprint = $value;
        }
    }
    /**
     * Unique identifier of the cardholder’s device such as a device serial number (e.g., International Mobile Equipment Identity [IMEI]). Must be at least 15 characters.
     */
    public ?string $customer_device_id {
        set {
            $this->assigning('customer_device_id', $value);
            $this->customer_device_id = $value;
        }
    }
    /**
     * The email address of the customer.
     */
    public ?string $customer_email_address {
        set {
            $this->assigning('customer_email_address', $value);
            $this->customer_email_address = $value;
        }
    }
    /**
     * The IP address that the customer used when making the purchase.
     */
    public ?string $customer_purchase_ip {
        set {
            $this->assigning('customer_purchase_ip', $value);
            $this->customer_purchase_ip = $value;
        }
    }
    /**
     * A description of the product or service that was sold.
     */
    public ?string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    /**
     * The address to which a physical product was shipped. All fields are required for Visa Compelling Evidence 3.0 evidence submission.
     */
    public ?\StripeSDK\DTOs\Dispute\TransactionShippingAddress $shipping_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'customer_account_id' => $value === null || is_string($value) ? $this->customer_account_id = $value : parent::assignMember($name, $value),
            'customer_device_fingerprint' => $value === null || is_string($value) ? $this->customer_device_fingerprint = $value : parent::assignMember($name, $value),
            'customer_device_id' => $value === null || is_string($value) ? $this->customer_device_id = $value : parent::assignMember($name, $value),
            'customer_email_address' => $value === null || is_string($value) ? $this->customer_email_address = $value : parent::assignMember($name, $value),
            'customer_purchase_ip' => $value === null || is_string($value) ? $this->customer_purchase_ip = $value : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'shipping_address' => $value === null || $value instanceof \stdClass ? $this->shipping_address = $value === null ? null : new \StripeSDK\DTOs\Dispute\TransactionShippingAddress($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
