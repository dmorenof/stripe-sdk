<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post;

/**
 * pause_schedules_create_params
 */
final class PauseSchedulesRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 40,
        ],
    ];

    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\SchedulesItemPauseRequest $pause;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PauseSchedulesItem\SchedulesItemResumeRequest $resume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
