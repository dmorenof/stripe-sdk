<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\CreditNotes;

final class Preview extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'amount' => 'amount',
            'credit_amount' => 'credit_amount',
            'effective_at' => 'effective_at',
            'email_type' => 'email_type',
            'expand' => 'expand',
            'invoice' => 'invoice',
            'lines' => 'lines',
            'memo' => 'memo',
            'metadata' => 'metadata',
            'out_of_band_amount' => 'out_of_band_amount',
            'reason' => 'reason',
            'refund_amount' => 'refund_amount',
            'refunds' => 'refunds',
            'shipping_cost' => 'shipping_cost',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'invoice' => [
            'maxLength' => 5000,
        ],
        'memo' => [
            'maxLength' => 5000,
        ],
    ];

    public ?int $amount;
    public ?int $credit_amount;
    public ?int $effective_at;
    public ?\StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query\EmailTypeEnum $email_type;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    public ?\StripeSDK\Collections\V1\CreditNotes\Preview\Get\Query\QueryLinesCollection $lines;
    public ?string $memo {
        set {
            $this->assigning('memo', $value);
            $this->memo = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\QueryMetadataMap $metadata;
    public ?int $out_of_band_amount;
    public ?\StripeSDK\Enums\V1\CreditNotes\Preview\Get\Query\QueryReasonEnum $reason;
    public ?int $refund_amount;
    public ?\StripeSDK\Collections\V1\CreditNotes\Preview\Get\Query\QueryRefundsCollection $refunds;
    public ?\StripeSDK\DTOs\V1\CreditNotes\Preview\Get\Query\ShippingCostDTO $shipping_cost;
    public ?\StripeSDK\Requests\V1\CreditNotes\Preview\Get $body;
}
