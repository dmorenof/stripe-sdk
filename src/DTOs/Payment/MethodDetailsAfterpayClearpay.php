<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_afterpay_clearpay
 */
final class MethodDetailsAfterpayClearpay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'order_id' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Afterpay order ID associated with this payment intent.
     */
    public ?string $order_id {
        set {
            $this->assigning('order_id', $value);
            $this->order_id = $value;
        }
    }
    /**
     * Order identifier shown to the merchant in Afterpay's online portal.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'order_id' => $value === null || is_string($value) ? $this->order_id = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
