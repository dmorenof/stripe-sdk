<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\PriceData\ProductData;

/**
 * tax_details
 */
final class TaxDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'performance_location' => [
            'maxLength' => 5000,
        ],
    ];

    public string $performance_location {
        set {
            $this->assigning('performance_location', $value);
            $this->performance_location = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\PriceData\ProductData\TaxDetails\TaxCodeRequest $tax_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'performance_location' => is_string($value) ? $this->performance_location = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
