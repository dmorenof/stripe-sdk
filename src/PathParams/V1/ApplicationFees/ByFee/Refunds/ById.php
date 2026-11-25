<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\ApplicationFees\ByFee\Refunds;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fee',
        'id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'fee' => 'fee',
            'id' => 'id',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'fee' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $fee {
        set {
            $this->assigning('fee', $value);
            $this->fee = $value;
        }
    }
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
}
