<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Outbound;

/**
 * outbound_payments_payment_method_details_financial_account
 */
final class PaymentsPaymentMethodDetailsFinancialAccount extends \Dmorenof\SdkRuntime\DTO
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
     * Token of the FinancialAccount.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The rails used to send funds.
     */
    public \StripeSDK\Enums\Outbound\PaymentsPaymentMethodDetailsFinancialAccount\NetworkEnum $network;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\Outbound\PaymentsPaymentMethodDetailsFinancialAccount\NetworkEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
