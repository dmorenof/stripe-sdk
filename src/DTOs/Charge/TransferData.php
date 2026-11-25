<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Charge;

/**
 * ChargeTransferData
 */
final class TransferData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    /**
     * The amount transferred to the destination account, if specified. By default, the entire charge amount is transferred to the destination account.
     */
    public ?int $amount;
    /**
     * ID of an existing, connected Stripe account to transfer funds to if `transfer_data` was specified in the charge request.
     */
    public \StripeSDK\DTOs\Charge\TransferData\DestinationDTO $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
