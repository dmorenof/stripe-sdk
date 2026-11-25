<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionTransferData
 */
final class TransferData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination',
    ];

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the destination account. By default, the entire amount is transferred to the destination.
     */
    public ?float $amount_percent;
    /**
     * The account where funds from the payment will be transferred to upon payment success.
     */
    public \StripeSDK\DTOs\Subscription\TransferData\DestinationDTO $destination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_percent' => $value === null || is_float($value) ? $this->amount_percent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
