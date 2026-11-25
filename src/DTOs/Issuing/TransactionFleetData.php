<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetData
 */
final class TransactionFleetData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'purchase_type' => [
            'maxLength' => 5000,
        ],
        'service_type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Answers to prompts presented to cardholder at point of sale.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetCardholderPromptData $cardholder_prompt_data;
    /**
     * The type of purchase. One of `fuel_purchase`, `non_fuel_purchase`, or `fuel_and_non_fuel_purchase`.
     */
    public ?string $purchase_type {
        set {
            $this->assigning('purchase_type', $value);
            $this->purchase_type = $value;
        }
    }
    /**
     * More information about the total amount. This information is not guaranteed to be accurate as some merchants may provide unreliable data.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetReportedBreakdown $reported_breakdown;
    /**
     * The type of fuel service. One of `non_fuel_transaction`, `full_service`, or `self_service`.
     */
    public ?string $service_type {
        set {
            $this->assigning('service_type', $value);
            $this->service_type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cardholder_prompt_data' => $value === null || $value instanceof \stdClass ? $this->cardholder_prompt_data = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetCardholderPromptData($value) : parent::assignMember($name, $value),
            'purchase_type' => $value === null || is_string($value) ? $this->purchase_type = $value : parent::assignMember($name, $value),
            'reported_breakdown' => $value === null || $value instanceof \stdClass ? $this->reported_breakdown = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetReportedBreakdown($value) : parent::assignMember($name, $value),
            'service_type' => $value === null || is_string($value) ? $this->service_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
