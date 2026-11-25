<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundPaymentsResourceReturnedStatus
 */
final class OutboundPaymentsResourceReturnedStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
        'transaction',
    ];

    /**
     * Reason for the return.
     */
    public \StripeSDK\Enums\Treasury\OutboundPaymentsResourceReturnedStatus\CodeEnum $code;
    /**
     * The Transaction associated with this object.
     */
    public \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceReturnedStatus\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\Treasury\OutboundPaymentsResourceReturnedStatus\CodeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
