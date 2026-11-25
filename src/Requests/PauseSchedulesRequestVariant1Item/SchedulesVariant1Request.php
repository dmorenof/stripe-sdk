<?php

declare(strict_types=1);

namespace StripeSDK\Requests\PauseSchedulesRequestVariant1Item;

/**
 * pause_schedules_update_params
 */
final class SchedulesVariant1Request extends \Dmorenof\SdkRuntime\DTO
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
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1Item\PauseSchedulesRequestVariant1ItemPauseRequest $pause;
    public \StripeSDK\Requests\PauseSchedulesRequestVariant1Item\PauseSchedulesRequestVariant1ItemResumeRequest $resume;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
