<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Apps;

final class Installs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'account' => 'account',
            'app' => 'app',
            'approval_required' => 'approval_required',
            'channel' => 'channel',
            'created' => 'created',
            'created_by' => 'created_by',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'status' => 'status',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
        'app' => [
            'maxLength' => 5000,
        ],
        'created_by' => [
            'maxLength' => 5000,
        ],
        'ending_before' => [
            'maxLength' => 5000,
        ],
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    public ?string $app {
        set {
            $this->assigning('app', $value);
            $this->app = $value;
        }
    }
    public ?bool $approval_required;
    public ?\StripeSDK\Enums\V1\Apps\Installs\Get\Query\QueryChannelEnum $channel;
    public ?\StripeSDK\DTOs\V1\Apps\Installs\Get\Query\QueryCreatedDTO $created;
    public ?string $created_by {
        set {
            $this->assigning('created_by', $value);
            $this->created_by = $value;
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
    public ?\StripeSDK\Enums\V1\Apps\Installs\Get\Query\QueryStatusEnum $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Apps\Installs\Get $body;
}
