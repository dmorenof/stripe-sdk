<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3;

/**
 * visa_compelling_evidence3_prior_undisputed_transaction
 */
final class UndisputedTransactionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'charge',
    ];

    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
    ];

    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\AccountIdRequest $customer_account_id;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\DeviceFingerprintRequest $customer_device_fingerprint;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\DeviceIdRequest $customer_device_id;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\EmailAddressRequest $customer_email_address;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\PurchaseIpRequest $customer_purchase_ip;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ProductDescriptionRequest $product_description;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddressRequest $shipping_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
