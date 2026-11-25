<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_kr_card
 */
final class MethodDetailsKrCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 4,
        ],
        'transaction_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The local credit or debit card brand.
     */
    public ?\StripeSDK\Enums\Payment\MethodDetailsKrCard\BrandEnum $brand;
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
     * The last four digits of the card. This may not be present for American Express cards.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    /**
     * The Korean Card transaction ID associated with this payment.
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
            'brand' => $value === null || is_string($value) ? $this->brand = $value === null ? null : \StripeSDK\Enums\Payment\MethodDetailsKrCard\BrandEnum::from($value) : parent::assignMember($name, $value),
            'buyer_id' => $value === null || is_string($value) ? $this->buyer_id = $value : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            'transaction_id' => $value === null || is_string($value) ? $this->transaction_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
