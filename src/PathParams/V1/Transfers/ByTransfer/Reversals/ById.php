<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Transfers\ByTransfer\Reversals;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'transfer',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'transfer' => 'transfer',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'transfer' => [
            'maxLength' => 5000,
        ],
    ];

    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $transfer {
        set {
            $this->assigning('transfer', $value);
            $this->transfer = $value;
        }
    }
}
