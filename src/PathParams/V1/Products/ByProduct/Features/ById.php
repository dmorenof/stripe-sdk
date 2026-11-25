<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Products\ByProduct\Features;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'product',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'product' => 'product',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
}
