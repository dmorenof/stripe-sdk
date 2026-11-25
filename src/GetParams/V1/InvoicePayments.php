<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class InvoicePayments extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'invoice' => 'invoice',
            'limit' => 'limit',
            'payment' => 'payment',
            'starting_after' => 'starting_after',
            'status' => 'status',
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
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\V1\InvoicePayments\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    public ?int $limit;
    public ?\StripeSDK\DTOs\V1\InvoicePayments\Get\Query\QueryPaymentDTO $payment;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\InvoicePayments\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Requests\V1\InvoicePayments\Get $body;
}
