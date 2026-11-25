<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cards\Post\Shipping;

/**
 * customs_param
 */
final class ShippingCustomsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'eori_number' => [
            'maxLength' => 5000,
        ],
    ];

    public string $eori_number {
        set {
            $this->assigning('eori_number', $value);
            $this->eori_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'eori_number' => is_string($value) ? $this->eori_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
