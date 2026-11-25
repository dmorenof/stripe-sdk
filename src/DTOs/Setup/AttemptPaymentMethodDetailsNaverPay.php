<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_attempt_payment_method_details_naver_pay
 */
final class AttemptPaymentMethodDetailsNaverPay extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies this particular Naver Pay account. You can use this attribute to check whether two Naver Pay accounts are the same.
     */
    public string $buyer_id {
        set {
            $this->assigning('buyer_id', $value);
            $this->buyer_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buyer_id' => is_string($value) ? $this->buyer_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
