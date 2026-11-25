<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * InvoiceSettingCustomerSetting
 */
final class SettingCustomerSetting extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'footer' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Default custom fields to be displayed on invoices for this customer.
     */
    public ?\StripeSDK\Collections\Invoice\CustomFieldsCollection $custom_fields;
    /**
     * ID of a payment method that's attached to the customer, to be used as the customer's default payment method for subscriptions and invoices.
     */
    public ?\StripeSDK\DTOs\Invoice\SettingCustomerSetting\PaymentMethodDTO $default_payment_method;
    /**
     * Default footer to be displayed on invoices for this customer.
     */
    public ?string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    /**
     * Default options for invoice PDF rendering for this customer.
     */
    public ?\StripeSDK\DTOs\Invoice\SettingCustomerRenderingOptions $rendering_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->custom_fields = $value === null ? null : new \StripeSDK\Collections\Invoice\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Invoice\SettingCustomField::class)) : parent::assignMember($name, $value),
            'footer' => $value === null || is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'rendering_options' => $value === null || $value instanceof \stdClass ? $this->rendering_options = $value === null ? null : new \StripeSDK\DTOs\Invoice\SettingCustomerRenderingOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
