<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundTransfersResourceReturnedDetails
 */
final class OutboundTransfersResourceReturnedDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
        'transaction',
    ];

    /**
     * Reason for the return.
     */
    public \StripeSDK\Enums\Treasury\OutboundTransfersResourceReturnedDetails\CodeEnum $code;
    /**
     * The Transaction associated with this object.
     */
    public \StripeSDK\DTOs\Treasury\OutboundTransfersResourceReturnedDetails\TransactionDTO $transaction;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\Treasury\OutboundTransfersResourceReturnedDetails\CodeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
