<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * pause_collection_param
 */
final class CollectionVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'behavior',
    ];

    public \StripeSDK\Enums\PauseCollectionRequestVariant1\PauseCollectionRequestVariant1BehaviorEnum $behavior;
    /**
     * Format: unix-time
     */
    public int $resumes_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'behavior' => is_string($value) ? $this->behavior = \StripeSDK\Enums\PauseCollectionRequestVariant1\PauseCollectionRequestVariant1BehaviorEnum::from($value) : parent::assignMember($name, $value),
            'resumes_at' => is_int($value) ? $this->resumes_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
