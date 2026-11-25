<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1;

final class PromotionCodes extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'active' => 'active',
            'code' => 'code',
            'coupon' => 'coupon',
            'created' => 'created',
            'customer' => 'customer',
            'customer_account' => 'customer_account',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'code' => [
            'maxLength' => 5000,
        ],
        'coupon' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?bool $active;
    public ?string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    public ?string $coupon {
        set {
            $this->assigning('coupon', $value);
            $this->coupon = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\PromotionCodes\Get\Query\QueryCreatedDTO $created;
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
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\PromotionCodes\Get $body;
}
