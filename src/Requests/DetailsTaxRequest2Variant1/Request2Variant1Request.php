<?php

declare(strict_types=1);

namespace StripeSDK\Requests\DetailsTaxRequest2Variant1;

/**
 * amount_details_tax_param
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'total_tax_amount',
    ];

    public int $total_tax_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'total_tax_amount' => is_int($value) ? $this->total_tax_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
