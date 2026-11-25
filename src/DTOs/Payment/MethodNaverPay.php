<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_naver_pay
 */
final class MethodNaverPay extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'funding',
    ];

    protected const array VALIDATION = [
        'buyer_id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Uniquely identifies this particular Naver Pay account. You can use this attribute to check whether two Naver Pay accounts are the same.
     */
    public ?string $buyer_id {
        set {
            $this->assigning('buyer_id', $value);
            $this->buyer_id = $value;
        }
    }
    /**
     * Whether to fund this transaction with Naver Pay points or a card.
     */
    public \StripeSDK\Enums\Payment\MethodNaverPay\FundingEnum $funding;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buyer_id' => $value === null || is_string($value) ? $this->buyer_id = $value : parent::assignMember($name, $value),
            'funding' => is_string($value) ? $this->funding = \StripeSDK\Enums\Payment\MethodNaverPay\FundingEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
