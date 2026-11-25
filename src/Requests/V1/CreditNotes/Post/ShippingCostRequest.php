<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CreditNotes\Post;

/**
 * credit_note_shipping_cost
 *
 * When shipping_cost contains the shipping_rate from the invoice, the shipping_cost is included in the credit note. One of `amount`, `lines`, or `shipping_cost` must be provided.
 */
final class ShippingCostRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'shipping_rate' => [
            'maxLength' => 5000,
        ],
    ];

    public string $shipping_rate {
        set {
            $this->assigning('shipping_rate', $value);
            $this->shipping_rate = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'shipping_rate' => is_string($value) ? $this->shipping_rate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
