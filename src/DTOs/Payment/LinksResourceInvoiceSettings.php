<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceInvoiceSettings
 */
final class LinksResourceInvoiceSettings extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account tax IDs associated with the invoice.
     */
    public ?\StripeSDK\Collections\Payment\LinksResourceInvoiceSettings\TaxIdsCollection $account_tax_ids;
    /**
     * A list of up to 4 custom fields to be displayed on the invoice.
     */
    public ?\StripeSDK\Collections\Invoice\CustomFieldsCollection $custom_fields;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Footer to be displayed on the invoice.
     */
    public ?string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    /**
     * The connected account that issues the invoice. The invoice is presented with the branding and support information of the specified account.
     */
    public ?\StripeSDK\DTOs\ConnectAccountReference $issuer;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceInvoiceSettings\MetadataMap $metadata;
    /**
     * Options for invoice PDF rendering.
     */
    public ?\StripeSDK\DTOs\Invoice\SettingCheckoutRenderingOptions $rendering_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->custom_fields = $value === null ? null : new \StripeSDK\Collections\Invoice\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Invoice\SettingCustomField::class)) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'footer' => $value === null || is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'issuer' => $value === null || $value instanceof \stdClass ? $this->issuer = $value === null ? null : new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            'rendering_options' => $value === null || $value instanceof \stdClass ? $this->rendering_options = $value === null ? null : new \StripeSDK\DTOs\Invoice\SettingCheckoutRenderingOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
