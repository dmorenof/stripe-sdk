<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post;

/**
 * transaction_shipping_cost_reversal
 *
 * The shipping cost to reverse.
 */
final class ShippingCostRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_tax',
    ];

    public int $amount;
    public int $amount_tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
