<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query;

/**
 * credit_note_line_item_params
 */
final class QueryLinesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'invoice_line_item' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $invoice_line_item {
        set {
            $this->assigning('invoice_line_item', $value);
            $this->invoice_line_item = $value;
        }
    }
    public \StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\LinesItem\LinesItemMetadataMap $metadata;
    public int $quantity;
    public \StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\LinesItem\TaxAmountsDTO $tax_amounts;
    public \StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\LinesItem\TaxRatesDTO $tax_rates;
    public \StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query\LinesItem\LinesItemTypeEnum $type;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'invoice_line_item' => is_string($value) ? $this->invoice_line_item = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query\LinesItem\LinesItemTypeEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
