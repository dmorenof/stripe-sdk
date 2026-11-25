<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Settlements;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bin',
        'clearing_date',
        'currency',
        'net_total_amount',
    ];

    protected const array VALIDATION = [
        'bin' => [
            'maxLength' => 5000,
        ],
        'network_settlement_identifier' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Bank Identification Number reflecting this settlement record.
     */
    public string $bin {
        set {
            $this->assigning('bin', $value);
            $this->bin = $value;
        }
    }
    /**
     * The date that the transactions are cleared and posted to user's accounts.
     */
    public int $clearing_date;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The total interchange received as reimbursement for the transactions.
     */
    public int $interchange_fees_amount;
    /**
     * The total net amount required to settle with the network.
     */
    public int $net_total_amount;
    /**
     * The card network for this settlement. One of ["visa", "maestro", "mastercard"]
     */
    public \StripeSDK\Enums\V1\TestHelpers\Issuing\Settlements\Post\SettlementsNetworkEnum $network;
    /**
     * The Settlement Identification Number assigned by the network.
     */
    public string $network_settlement_identifier {
        set {
            $this->assigning('network_settlement_identifier', $value);
            $this->network_settlement_identifier = $value;
        }
    }
    /**
     * The total transaction amount reflected in this settlement.
     */
    public int $transaction_amount;
    /**
     * The total number of transactions reflected in this settlement.
     */
    public int $transaction_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bin' => is_string($value) ? $this->bin = $value : parent::assignMember($name, $value),
            'clearing_date' => is_int($value) ? $this->clearing_date = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'interchange_fees_amount' => is_int($value) ? $this->interchange_fees_amount = $value : parent::assignMember($name, $value),
            'net_total_amount' => is_int($value) ? $this->net_total_amount = $value : parent::assignMember($name, $value),
            'network' => is_string($value) ? $this->network = \StripeSDK\Enums\V1\TestHelpers\Issuing\Settlements\Post\SettlementsNetworkEnum::from($value) : parent::assignMember($name, $value),
            'network_settlement_identifier' => is_string($value) ? $this->network_settlement_identifier = $value : parent::assignMember($name, $value),
            'transaction_amount' => is_int($value) ? $this->transaction_amount = $value : parent::assignMember($name, $value),
            'transaction_count' => is_int($value) ? $this->transaction_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
