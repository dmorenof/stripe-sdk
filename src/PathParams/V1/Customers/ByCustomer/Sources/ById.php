<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Customers\ByCustomer\Sources;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'customer' => 'customer',
            'id' => 'id',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $customer;
    public string $id;
}
