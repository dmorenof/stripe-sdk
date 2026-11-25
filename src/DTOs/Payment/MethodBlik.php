<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_blik
 */
final class MethodBlik extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique and immutable identifier assigned by BLIK to every buyer.
     */
    public ?string $buyer_id {
        set {
            $this->assigning('buyer_id', $value);
            $this->buyer_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buyer_id' => $value === null || is_string($value) ? $this->buyer_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
