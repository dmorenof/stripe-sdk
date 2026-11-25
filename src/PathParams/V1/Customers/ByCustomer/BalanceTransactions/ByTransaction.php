<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Customers\ByCustomer\BalanceTransactions;

final class ByTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'transaction',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'customer' => 'customer',
            'transaction' => 'transaction',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $customer;
    public string $transaction;
}
