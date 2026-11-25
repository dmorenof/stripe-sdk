<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Customers\ByCustomer\CashBalanceTransactions;

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

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public string $transaction;
}
