<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Issuing;

final class Cards extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'cardholder' => 'cardholder',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'exp_month' => 'exp_month',
            'exp_year' => 'exp_year',
            'expand' => 'expand',
            'last4' => 'last4',
            'limit' => 'limit',
            'personalization_design' => 'personalization_design',
            'starting_after' => 'starting_after',
            'status' => 'status',
            'type' => 'type',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'cardholder' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'last4' => [
            'maxLength' => 5000,
        ],
        'personalization_design' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $cardholder {
        set {
            $this->assigning('cardholder', $value);
            $this->cardholder = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Issuing\Cards\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?int $exp_month;
    public ?int $exp_year;
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }
    public ?int $limit;
    public ?string $personalization_design {
        set {
            $this->assigning('personalization_design', $value);
            $this->personalization_design = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Issuing\Cards\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Enums\V1\Issuing\Cards\Get\Query\QueryTypeEnum $type;
    public ?\StripeSDK\Requests\V1\Issuing\Cards\Get $body;
}
