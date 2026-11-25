<?php

declare(strict_types=1);

namespace StripeSDK\GetParams\V1\Identity;

final class VerificationReports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'client_reference_id' => 'client_reference_id',
            'created' => 'created',
            'ending_before' => 'ending_before',
            'expand' => 'expand',
            'limit' => 'limit',
            'starting_after' => 'starting_after',
            'type' => 'type',
            'verification_session' => 'verification_session',
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
        'starting_after' => [
            'maxLength' => 5000,
        ],
        'verification_session' => [
            'maxLength' => 5000,
        ],
    ];

    public ?string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    public ?\StripeSDK\DTOs\V1\Identity\VerificationReports\Get\Query\QueryCreatedDTO $created;
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
    public ?\StripeSDK\Enums\V1\Identity\VerificationReports\Get\Query\QueryTypeEnum $type;
    public ?string $verification_session {
        set {
            $this->assigning('verification_session', $value);
            $this->verification_session = $value;
        }
    }
    public ?\StripeSDK\Requests\V1\Identity\VerificationReports\Get $body;
}
