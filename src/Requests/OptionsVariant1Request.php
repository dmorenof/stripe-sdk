<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * checkout_rendering_options_param
 */
final class OptionsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'template' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\RenderingOptionsRequestVariant1\TaxDisplayEnum $amount_tax_display;
    public string $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_tax_display' => is_string($value) ? $this->amount_tax_display = \StripeSDK\Enums\RenderingOptionsRequestVariant1\TaxDisplayEnum::from($value) : parent::assignMember($name, $value),
            'template' => is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
