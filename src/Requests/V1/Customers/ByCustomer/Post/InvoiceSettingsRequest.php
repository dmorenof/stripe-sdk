<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Post;

/**
 * customer_param
 *
 * Default invoice settings for this customer.
 */
final class InvoiceSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\InvoiceSettings\CustomFieldsRequest $custom_fields;
    public string $default_payment_method {
        set {
            $this->assigning('default_payment_method', $value);
            $this->default_payment_method = $value;
        }
    }
    public string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Post\InvoiceSettings\RenderingOptionsRequest $rendering_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
