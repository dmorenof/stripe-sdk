<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem;

/**
 * shipping_address
 */
final class ShippingAddressRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\AddressCityRequest $city;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\AddressCountryRequest $country;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\AddressLine1Request $line1;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\AddressLine2Request $line2;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\PostalCodeRequest $postal_code;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\PriorUndisputedTransactionsItem\ShippingAddress\AddressStateRequest $state;
}
