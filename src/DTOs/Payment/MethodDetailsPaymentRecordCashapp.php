<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_payment_record_cashapp
 */
final class MethodDetailsPaymentRecordCashapp extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
        'cashtag' => [
            'maxLength' => 5000,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A unique and immutable identifier assigned by Cash App to every buyer.
     */
    public ?string $buyer_id {
        set {
            $this->assigning('buyer_id', $value);
            $this->buyer_id = $value;
        }
    }
    /**
     * A public identifier for buyers using Cash App.
     */
    public ?string $cashtag {
        set {
            $this->assigning('cashtag', $value);
            $this->cashtag = $value;
        }
    }
    /**
     * A unique and immutable identifier of payments assigned by Cash App.
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
            'cashtag' => $value === null || is_string($value) ? $this->cashtag = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
