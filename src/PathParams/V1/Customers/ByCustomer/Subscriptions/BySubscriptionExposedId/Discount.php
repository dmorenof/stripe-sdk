<?php

declare(strict_types=1);

namespace StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId;

final class Discount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'subscription_exposed_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'customer' => 'customer',
            'subscription_exposed_id' => 'subscription_exposed_id',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'subscription_exposed_id' => [
            'maxLength' => 5000,
        ],
    ];

    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public string $subscription_exposed_id {
        set {
            $this->assigning('subscription_exposed_id', $value);
            $this->subscription_exposed_id = $value;
        }
    }
}
