<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post;

/**
 * customer_details_param
 *
 * Details about the customer you want to invoice or overrides for an existing customer. If `automatic_tax` is enabled then one of `customer`, `customer_details`, `subscription`, or `schedule` must be set.
 */
final class CustomerDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetails\DetailsAddressRequest $address;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetails\DetailsShippingRequest $shipping;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetails\DetailsTaxRequest $tax;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\CustomerDetails\TaxExemptEnum $tax_exempt;
    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\CustomerDetails\TaxIdsCollection $tax_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'tax_exempt' => is_string($value) ? $this->tax_exempt = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\CustomerDetails\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
