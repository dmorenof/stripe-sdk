<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * received_payment_method_details_financial_account
 */
final class ReceivedPaymentMethodDetailsFinancialAccount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'network',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The FinancialAccount ID.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The rails the ReceivedCredit was sent over. A FinancialAccount can only send funds over `stripe`.
     */
    public \StripeSDK\Enums\ReceivedPaymentMethodDetailsFinancialAccount\NetworkEnum $network;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\ReceivedPaymentMethodDetailsFinancialAccount\NetworkEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
