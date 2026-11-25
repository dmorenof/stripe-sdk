<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\CreditNotes\Preview;

final class Lines extends \Dmorenof\SdkRuntime\DTO
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
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'invoice' => 'invoice',
            'limit' => 'limit',
            'lines' => 'lines',
            'memo' => 'memo',
            'metadata' => 'metadata',
            'out_of_band_amount' => 'out_of_band_amount',
            'reason' => 'reason',
            'refund_amount' => 'refund_amount',
            'refunds' => 'refunds',
            'shipping_cost' => 'shipping_cost',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'invoice' => [
            'maxLength' => 5000,
        ],
        'memo' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?int $amount;
    public ?int $credit_amount;
    public ?int $effective_at;
    public ?\StripeSDK\Enums\V1\CreditNotes\Preview\Lines\Get\Query\EmailTypeEnum $email_type;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    public ?int $limit;
    public ?\StripeSDK\Collections\V1\CreditNotes\Preview\Lines\Get\Query\QueryLinesCollection $lines;
    public ?string $memo {
        set {
            $this->assigning('memo', $value);
            $this->memo = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\CreditNotes\Preview\Lines\Get\Query\QueryMetadataMap $metadata;
    public ?int $out_of_band_amount;
    public ?\StripeSDK\Enums\V1\CreditNotes\Preview\Lines\Get\Query\QueryReasonEnum $reason;
    public ?int $refund_amount;
    public ?\StripeSDK\Collections\V1\CreditNotes\Preview\Lines\Get\Query\QueryRefundsCollection $refunds;
    public ?\StripeSDK\DTOs\V1\CreditNotes\Preview\Lines\Get\Query\ShippingCostDTO $shipping_cost;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\CreditNotes\Preview\Lines\Get $body;
}
