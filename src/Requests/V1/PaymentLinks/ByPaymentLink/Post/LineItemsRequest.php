<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * line_items_update_params
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\LineItemsItem\AdjustableQuantityRequest $adjustable_quantity;
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public int $quantity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
