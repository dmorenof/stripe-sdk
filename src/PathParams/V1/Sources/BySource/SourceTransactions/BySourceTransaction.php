<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Sources\BySource\SourceTransactions;

final class BySourceTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source',
        'source_transaction',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'source' => 'source',
            'source_transaction' => 'source_transaction',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'source' => [
            'maxLength' => 5000,
        ],
        'source_transaction' => [
            'maxLength' => 5000,
        ],
    ];

    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    public string $source_transaction {
        set {
            $this->assigning('source_transaction', $value);
            $this->source_transaction = $value;
        }
    }
}
