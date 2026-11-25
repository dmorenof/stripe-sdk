<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceTransferData
 */
final class LinksResourceTransferData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    /**
     * The amount in cents (or local equivalent) that will be transferred to the destination account. By default, the entire amount is transferred to the destination.
     */
    public ?int $amount;
    /**
     * The connected account receiving the transfer.
     */
    public \StripeSDK\DTOs\Payment\LinksResourceTransferData\DestinationDTO $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
