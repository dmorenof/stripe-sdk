<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Invoices\ByInvoice\Lines;

final class ByLineItemId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice',
        'line_item_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'invoice' => 'invoice',
            'line_item_id' => 'line_item_id',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'invoice' => [
            'maxLength' => 5000,
        ],
        'line_item_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    public string $line_item_id {
        set {
            $this->assigning('line_item_id', $value);
            $this->line_item_id = $value;
        }
    }
}
