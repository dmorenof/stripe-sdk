<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Customers\ByCustomer\PaymentMethods;

final class ByPaymentMethod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'payment_method',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'customer' => 'customer',
            'payment_method' => 'payment_method',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
}
