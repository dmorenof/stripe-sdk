<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionPurchaseDetails
 */
final class TransactionPurchaseDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'reference' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Fleet-specific information for transactions using Fleet cards.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetData $fleet;
    /**
     * Information about the flight that was purchased with this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFlightData $flight;
    /**
     * Information about fuel that was purchased with this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFuelData $fuel;
    /**
     * Information about lodging that was purchased with this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionLodgingData $lodging;
    /**
     * The line items in the purchase.
     */
    public ?\StripeSDK\Collections\Issuing\TransactionPurchaseDetails\ReceiptCollection $receipt;
    /**
     * A merchant-specific order number.
     */
    public ?string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fleet' => $value === null || $value instanceof \stdClass ? $this->fleet = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetData($value) : parent::assignMember($name, $value),
            'flight' => $value === null || $value instanceof \stdClass ? $this->flight = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFlightData($value) : parent::assignMember($name, $value),
            'fuel' => $value === null || $value instanceof \stdClass ? $this->fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFuelData($value) : parent::assignMember($name, $value),
            'lodging' => $value === null || $value instanceof \stdClass ? $this->lodging = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionLodgingData($value) : parent::assignMember($name, $value),
            'receipt' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->receipt = $value === null ? null : new \StripeSDK\Collections\Issuing\TransactionPurchaseDetails\ReceiptCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Issuing\TransactionReceiptData::class)) : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
