<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post;

/**
 * pricing_param
 *
 * The pricing information for the invoice item.
 */
final class ByLineItemIdPricingRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
