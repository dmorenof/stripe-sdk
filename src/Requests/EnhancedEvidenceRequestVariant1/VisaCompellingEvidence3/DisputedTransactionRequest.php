<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3;

/**
 * visa_compelling_evidence3_disputed_transaction
 */
final class DisputedTransactionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\AccountIdRequest $customer_account_id;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\DeviceFingerprintRequest $customer_device_fingerprint;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\DeviceIdRequest $customer_device_id;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\EmailAddressRequest $customer_email_address;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\PurchaseIpRequest $customer_purchase_ip;
    public \StripeSDK\Enums\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\OrServicesEnum $merchandise_or_services;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\ProductDescriptionRequest $product_description;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\ShippingAddressRequest $shipping_address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'merchandise_or_services' => is_string($value) ? $this->merchandise_or_services = \StripeSDK\Enums\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransaction\OrServicesEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
