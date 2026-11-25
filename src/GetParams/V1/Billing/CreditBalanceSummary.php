<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Billing;

final class CreditBalanceSummary extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'filter',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'expand' => 'expand',
            'filter' => 'filter',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public \StripeSDK\DTOs\V1\Billing\CreditBalanceSummary\Get\Query\QueryFilterDTO $filter;
    public ?\StripeSDK\Requests\V1\Billing\CreditBalanceSummary\Get $body;
}
