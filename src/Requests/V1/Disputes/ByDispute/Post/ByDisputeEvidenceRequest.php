<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Disputes\ByDispute\Post;

/**
 * dispute_evidence_params
 *
 * Evidence to upload, to respond to a dispute. Updating any field in the hash will submit all fields in the hash for review. The combined character count of all fields is limited to 150,000.
 */
final class ByDisputeEvidenceRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'access_activity_log' => [
            'maxLength' => 20000,
        ],
        'billing_address' => [
            'maxLength' => 5000,
        ],
        'cancellation_policy_disclosure' => [
            'maxLength' => 20000,
        ],
        'cancellation_rebuttal' => [
            'maxLength' => 20000,
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
            'maxLength' => 20000,
        ],
        'duplicate_charge_id' => [
            'maxLength' => 5000,
        ],
        'product_description' => [
            'maxLength' => 20000,
        ],
        'refund_policy_disclosure' => [
            'maxLength' => 20000,
        ],
        'refund_refusal_explanation' => [
            'maxLength' => 20000,
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
            'maxLength' => 20000,
        ],
    ];

    public string $access_activity_log {
        set {
            $this->assigning('access_activity_log', $value);
            $this->access_activity_log = $value;
        }
    }
    public string $billing_address {
        set {
            $this->assigning('billing_address', $value);
            $this->billing_address = $value;
        }
    }
    public string $cancellation_policy;
    public string $cancellation_policy_disclosure {
        set {
            $this->assigning('cancellation_policy_disclosure', $value);
            $this->cancellation_policy_disclosure = $value;
        }
    }
    public string $cancellation_rebuttal {
        set {
            $this->assigning('cancellation_rebuttal', $value);
            $this->cancellation_rebuttal = $value;
        }
    }
    public string $customer_communication;
    public string $customer_email_address {
        set {
            $this->assigning('customer_email_address', $value);
            $this->customer_email_address = $value;
        }
    }
    public string $customer_name {
        set {
            $this->assigning('customer_name', $value);
            $this->customer_name = $value;
        }
    }
    public string $customer_purchase_ip {
        set {
            $this->assigning('customer_purchase_ip', $value);
            $this->customer_purchase_ip = $value;
        }
    }
    public string $customer_signature;
    public string $duplicate_charge_documentation;
    public string $duplicate_charge_explanation {
        set {
            $this->assigning('duplicate_charge_explanation', $value);
            $this->duplicate_charge_explanation = $value;
        }
    }
    public string $duplicate_charge_id {
        set {
            $this->assigning('duplicate_charge_id', $value);
            $this->duplicate_charge_id = $value;
        }
    }
    public \StripeSDK\Requests\V1\Disputes\ByDispute\Post\Evidence\EnhancedEvidenceRequest $enhanced_evidence;
    public string $product_description {
        set {
            $this->assigning('product_description', $value);
            $this->product_description = $value;
        }
    }
    public string $receipt;
    public string $refund_policy;
    public string $refund_policy_disclosure {
        set {
            $this->assigning('refund_policy_disclosure', $value);
            $this->refund_policy_disclosure = $value;
        }
    }
    public string $refund_refusal_explanation {
        set {
            $this->assigning('refund_refusal_explanation', $value);
            $this->refund_refusal_explanation = $value;
        }
    }
    public string $service_date {
        set {
            $this->assigning('service_date', $value);
            $this->service_date = $value;
        }
    }
    public string $service_documentation;
    public string $shipping_address {
        set {
            $this->assigning('shipping_address', $value);
            $this->shipping_address = $value;
        }
    }
    public string $shipping_carrier {
        set {
            $this->assigning('shipping_carrier', $value);
            $this->shipping_carrier = $value;
        }
    }
    public string $shipping_date {
        set {
            $this->assigning('shipping_date', $value);
            $this->shipping_date = $value;
        }
    }
    public string $shipping_documentation;
    public string $shipping_tracking_number {
        set {
            $this->assigning('shipping_tracking_number', $value);
            $this->shipping_tracking_number = $value;
        }
    }
    public string $uncategorized_file;
    public string $uncategorized_text {
        set {
            $this->assigning('uncategorized_text', $value);
            $this->uncategorized_text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_activity_log' => is_string($value) ? $this->access_activity_log = $value : parent::assignMember($name, $value),
            'billing_address' => is_string($value) ? $this->billing_address = $value : parent::assignMember($name, $value),
            'cancellation_policy' => is_string($value) ? $this->cancellation_policy = $value : parent::assignMember($name, $value),
            'cancellation_policy_disclosure' => is_string($value) ? $this->cancellation_policy_disclosure = $value : parent::assignMember($name, $value),
            'cancellation_rebuttal' => is_string($value) ? $this->cancellation_rebuttal = $value : parent::assignMember($name, $value),
            'customer_communication' => is_string($value) ? $this->customer_communication = $value : parent::assignMember($name, $value),
            'customer_email_address' => is_string($value) ? $this->customer_email_address = $value : parent::assignMember($name, $value),
            'customer_name' => is_string($value) ? $this->customer_name = $value : parent::assignMember($name, $value),
            'customer_purchase_ip' => is_string($value) ? $this->customer_purchase_ip = $value : parent::assignMember($name, $value),
            'customer_signature' => is_string($value) ? $this->customer_signature = $value : parent::assignMember($name, $value),
            'duplicate_charge_documentation' => is_string($value) ? $this->duplicate_charge_documentation = $value : parent::assignMember($name, $value),
            'duplicate_charge_explanation' => is_string($value) ? $this->duplicate_charge_explanation = $value : parent::assignMember($name, $value),
            'duplicate_charge_id' => is_string($value) ? $this->duplicate_charge_id = $value : parent::assignMember($name, $value),
            'product_description' => is_string($value) ? $this->product_description = $value : parent::assignMember($name, $value),
            'receipt' => is_string($value) ? $this->receipt = $value : parent::assignMember($name, $value),
            'refund_policy' => is_string($value) ? $this->refund_policy = $value : parent::assignMember($name, $value),
            'refund_policy_disclosure' => is_string($value) ? $this->refund_policy_disclosure = $value : parent::assignMember($name, $value),
            'refund_refusal_explanation' => is_string($value) ? $this->refund_refusal_explanation = $value : parent::assignMember($name, $value),
            'service_date' => is_string($value) ? $this->service_date = $value : parent::assignMember($name, $value),
            'service_documentation' => is_string($value) ? $this->service_documentation = $value : parent::assignMember($name, $value),
            'shipping_address' => is_string($value) ? $this->shipping_address = $value : parent::assignMember($name, $value),
            'shipping_carrier' => is_string($value) ? $this->shipping_carrier = $value : parent::assignMember($name, $value),
            'shipping_date' => is_string($value) ? $this->shipping_date = $value : parent::assignMember($name, $value),
            'shipping_documentation' => is_string($value) ? $this->shipping_documentation = $value : parent::assignMember($name, $value),
            'shipping_tracking_number' => is_string($value) ? $this->shipping_tracking_number = $value : parent::assignMember($name, $value),
            'uncategorized_file' => is_string($value) ? $this->uncategorized_file = $value : parent::assignMember($name, $value),
            'uncategorized_text' => is_string($value) ? $this->uncategorized_text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
