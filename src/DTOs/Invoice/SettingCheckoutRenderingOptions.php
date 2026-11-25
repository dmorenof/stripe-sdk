<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_setting_checkout_rendering_options
 */
final class SettingCheckoutRenderingOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'amount_tax_display' => [
            'maxLength' => 5000,
        ],
        'template' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * How line-item prices and amounts will be displayed with respect to tax on invoice PDFs.
     */
    public ?string $amount_tax_display {
        set {
            $this->assigning('amount_tax_display', $value);
            $this->amount_tax_display = $value;
        }
    }
    /**
     * ID of the invoice rendering template to be used for the generated invoice.
     */
    public ?string $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_tax_display' => $value === null || is_string($value) ? $this->amount_tax_display = $value : parent::assignMember($name, $value),
            'template' => $value === null || is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
