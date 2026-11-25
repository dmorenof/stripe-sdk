<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource\Post\Mandate;

/**
 * mandate_acceptance_params
 */
final class MandateAcceptanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'status' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
        'user_agent' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $date;
    public string $ip;
    public \StripeSDK\Requests\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceOfflineRequest $offline;
    public \StripeSDK\Requests\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceOnlineRequest $online;
    public \StripeSDK\Enums\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceStatusEnum $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public \StripeSDK\Enums\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceTypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }
    public string $user_agent {
        set {
            $this->assigning('user_agent', $value);
            $this->user_agent = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date' => is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceStatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Sources\BySource\Post\Mandate\Acceptance\AcceptanceTypeEnum::from($value) : parent::assignMember($name, $value),
            'user_agent' => is_string($value) ? $this->user_agent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
