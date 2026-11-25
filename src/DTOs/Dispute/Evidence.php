<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEvidence
 */
final class Evidence extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enhanced_evidence',
    ];

    protected const array VALIDATION = [
        'access_activity_log' => [
            'maxLength' => 150000,
        ],
        'billing_address' => [
            'maxLength' => 5000,
        ],
        'cancellation_policy_disclosure' => [
            'maxLength' => 150000,
        ],
        'cancellation_rebuttal' => [
            'maxLength' => 150000,
        ],
        'customer_email_address' => [
            'maxLength' => 5000,
        ],
        'customer_name' => [
            'maxLength' => 5000,
        ],
        'customer_purchase_ip' => [
            'maxLength' => 5000,
        ],
        'duplicate_charge_explanation' => [
            'maxLength' => 150000,
        ],
        'duplicate_charge_id' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 150000,
        ],
        'refund_policy_disclosure' => [
            'maxLength' => 150000,
        ],
        'refund_refusal_explanation' => [
            'maxLength' => 150000,
        ],
        'service_date' => [
            'maxLength' => 5000,
        ],
        'shipping_address' => [
            'maxLength' => 5000,
        ],
        'shipping_carrier' => [
            'maxLength' => 5000,
        ],
        'shipping_date' => [
            'maxLength' => 5000,
        ],
        'shipping_tracking_number' => [
            'maxLength' => 5000,
        ],
        'uncategorized_text' => [
            'maxLength' => 150000,
        ],
    ];

    /**
     * Any server or activity logs showing proof that the customer accessed or downloaded the purchased digital product. This information should include IP addresses, corresponding timestamps, and any detailed recorded activity.
     */
    public ?string $access_activity_log {
        set {
            $this->assigning('access_activity_log', $value);
            $this->access_activity_log = $value;
        }
    }
    /**
     * The billing address provided by the customer.
     */
    public ?string $billing_address {
        set {
            $this->assigning('billing_address', $value);
            $this->billing_address = $value;
        }
    }
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Your subscription cancellation policy, as shown to the customer.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\CancellationPolicyDTO $cancellation_policy;
    /**
     * An explanation of how and when the customer was shown your refund policy prior to purchase.
     */
    public ?string $cancellation_policy_disclosure {
        set {
            $this->assigning('cancellation_policy_disclosure', $value);
            $this->cancellation_policy_disclosure = $value;
        }
    }
    /**
     * A justification for why the customer's subscription was not canceled.
     */
    public ?string $cancellation_rebuttal {
        set {
            $this->assigning('cancellation_rebuttal', $value);
            $this->cancellation_rebuttal = $value;
        }
    }
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Any communication with the customer that you feel is relevant to your case. Examples include emails proving that the customer received the product or service, or demonstrating their use of or satisfaction with the product or service.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\CustomerCommunicationDTO $customer_communication;
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
     * The name of the customer.
     */
    public ?string $customer_name {
        set {
            $this->assigning('customer_name', $value);
            $this->customer_name = $value;
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
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) A relevant document or contract showing the customer's signature.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\CustomerSignatureDTO $customer_signature;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Documentation for the prior charge that can uniquely identify the charge, such as a receipt, shipping label, work order, etc. This document should be paired with a similar document from the disputed payment that proves the two payments are separate.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\ChargeDocumentationDTO $duplicate_charge_documentation;
    /**
     * An explanation of the difference between the disputed charge versus the prior charge that appears to be a duplicate.
     */
    public ?string $duplicate_charge_explanation {
        set {
            $this->assigning('duplicate_charge_explanation', $value);
            $this->duplicate_charge_explanation = $value;
        }
    }
    /**
     * The Stripe ID for the prior charge which appears to be a duplicate of the disputed charge.
     */
    public ?string $duplicate_charge_id {
        set {
            $this->assigning('duplicate_charge_id', $value);
            $this->duplicate_charge_id = $value;
        }
    }
    public \StripeSDK\DTOs\Dispute\EnhancedEvidence $enhanced_evidence;
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
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Any receipt or message sent to the customer notifying them of the charge.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\ReceiptDTO $receipt;
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Your refund policy, as shown to the customer.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\RefundPolicyDTO $refund_policy;
    /**
     * Documentation demonstrating that the customer was shown your refund policy prior to purchase.
     */
    public ?string $refund_policy_disclosure {
        set {
            $this->assigning('refund_policy_disclosure', $value);
            $this->refund_policy_disclosure = $value;
        }
    }
    /**
     * A justification for why the customer is not entitled to a refund.
     */
    public ?string $refund_refusal_explanation {
        set {
            $this->assigning('refund_refusal_explanation', $value);
            $this->refund_refusal_explanation = $value;
        }
    }
    /**
     * The date on which the customer received or began receiving the purchased service, in a clear human-readable format.
     */
    public ?string $service_date {
        set {
            $this->assigning('service_date', $value);
            $this->service_date = $value;
        }
    }
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Documentation showing proof that a service was provided to the customer. This could include a copy of a signed contract, work order, or other form of written agreement.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\ServiceDocumentationDTO $service_documentation;
    /**
     * The address to which a physical product was shipped. You should try to include as complete address information as possible.
     */
    public ?string $shipping_address {
        set {
            $this->assigning('shipping_address', $value);
            $this->shipping_address = $value;
        }
    }
    /**
     * The delivery service that shipped a physical product, such as Fedex, UPS, USPS, etc. If multiple carriers were used for this purchase, please separate them with commas.
     */
    public ?string $shipping_carrier {
        set {
            $this->assigning('shipping_carrier', $value);
            $this->shipping_carrier = $value;
        }
    }
    /**
     * The date on which a physical product began its route to the shipping address, in a clear human-readable format.
     */
    public ?string $shipping_date {
        set {
            $this->assigning('shipping_date', $value);
            $this->shipping_date = $value;
        }
    }
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Documentation showing proof that a product was shipped to the customer at the same address the customer provided to you. This could include a copy of the shipment receipt, shipping label, etc. It should show the customer's full shipping address, if possible.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\ShippingDocumentationDTO $shipping_documentation;
    /**
     * The tracking number for a physical product, obtained from the delivery service. If multiple tracking numbers were generated for this purchase, please separate them with commas.
     */
    public ?string $shipping_tracking_number {
        set {
            $this->assigning('shipping_tracking_number', $value);
            $this->shipping_tracking_number = $value;
        }
    }
    /**
     * (ID of a [file upload](https://stripe.com/docs/guides/file-upload)) Any additional evidence or statements.
     */
    public ?\StripeSDK\DTOs\Dispute\Evidence\UncategorizedFileDTO $uncategorized_file;
    /**
     * Any additional evidence or statements.
     */
    public ?string $uncategorized_text {
        set {
            $this->assigning('uncategorized_text', $value);
            $this->uncategorized_text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_activity_log' => $value === null || is_string($value) ? $this->access_activity_log = $value : parent::assignMember($name, $value),
            'billing_address' => $value === null || is_string($value) ? $this->billing_address = $value : parent::assignMember($name, $value),
            'cancellation_policy_disclosure' => $value === null || is_string($value) ? $this->cancellation_policy_disclosure = $value : parent::assignMember($name, $value),
            'cancellation_rebuttal' => $value === null || is_string($value) ? $this->cancellation_rebuttal = $value : parent::assignMember($name, $value),
            'customer_email_address' => $value === null || is_string($value) ? $this->customer_email_address = $value : parent::assignMember($name, $value),
            'customer_name' => $value === null || is_string($value) ? $this->customer_name = $value : parent::assignMember($name, $value),
            'customer_purchase_ip' => $value === null || is_string($value) ? $this->customer_purchase_ip = $value : parent::assignMember($name, $value),
            'duplicate_charge_explanation' => $value === null || is_string($value) ? $this->duplicate_charge_explanation = $value : parent::assignMember($name, $value),
            'duplicate_charge_id' => $value === null || is_string($value) ? $this->duplicate_charge_id = $value : parent::assignMember($name, $value),
            'enhanced_evidence' => $value instanceof \stdClass ? $this->enhanced_evidence = new \StripeSDK\DTOs\Dispute\EnhancedEvidence($value) : parent::assignMember($name, $value),
            'product_description' => $value === null || is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'refund_policy_disclosure' => $value === null || is_string($value) ? $this->refund_policy_disclosure = $value : parent::assignMember($name, $value),
            'refund_refusal_explanation' => $value === null || is_string($value) ? $this->refund_refusal_explanation = $value : parent::assignMember($name, $value),
            'service_date' => $value === null || is_string($value) ? $this->service_date = $value : parent::assignMember($name, $value),
            'shipping_address' => $value === null || is_string($value) ? $this->shipping_address = $value : parent::assignMember($name, $value),
            'shipping_carrier' => $value === null || is_string($value) ? $this->shipping_carrier = $value : parent::assignMember($name, $value),
            'shipping_date' => $value === null || is_string($value) ? $this->shipping_date = $value : parent::assignMember($name, $value),
            'shipping_tracking_number' => $value === null || is_string($value) ? $this->shipping_tracking_number = $value : parent::assignMember($name, $value),
            'uncategorized_text' => $value === null || is_string($value) ? $this->uncategorized_text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
