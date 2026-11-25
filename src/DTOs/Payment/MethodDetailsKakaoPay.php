<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_kakao_pay
 */
final class MethodDetailsKakaoPay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique identifier for the buyer as determined by the local payment processor.
     */
    public ?string $buyer_id {
        set {
            $this->assigning('buyer_id', $value);
            $this->buyer_id = $value;
        }
    }
    /**
     * The Kakao Pay transaction ID associated with this payment.
     */
    public ?string $transaction_id {
        set {
            $this->assigning('transaction_id', $value);
            $this->transaction_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buyer_id' => $value === null || is_string($value) ? $this->buyer_id = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
