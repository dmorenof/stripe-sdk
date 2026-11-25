<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Identity;

final class VerificationSessions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'client_reference_id' => 'client_reference_id',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'related_customer' => 'related_customer',
            'related_customer_account' => 'related_customer_account',
            'starting_after' => 'starting_after',
            'status' => 'status',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'client_reference_id' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'related_customer' => [
            'maxLength' => 5000,
        ],
        'related_customer_account' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Identity\VerificationSessions\Get\Query\QueryCreatedDTO $created;
    public ?string $ending_before {
        set {
            $this->assigning('ending_before', $value);
            $this->ending_before = $value;
        }
    }
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    public ?int $limit;
    public ?string $related_customer {
        set {
            $this->assigning('related_customer', $value);
            $this->related_customer = $value;
        }
    }
    public ?string $related_customer_account {
        set {
            $this->assigning('related_customer_account', $value);
            $this->related_customer_account = $value;
        }
    }
    public ?string $starting_after {
        set {
            $this->assigning('starting_after', $value);
            $this->starting_after = $value;
        }
    }
    public ?\StripeSDK\Enums\V1\Identity\VerificationSessions\Get\Query\QueryStatusEnum $status;
    public ?\StripeSDK\Requests\V1\Identity\VerificationSessions\Get $body;
}
