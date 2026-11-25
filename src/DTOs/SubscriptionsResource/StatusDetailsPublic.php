<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Status Detail
 *
 * Describes changes to the subscription's status.
 */
final class StatusDetailsPublic extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'paused',
    ];

    public \StripeSDK\DTOs\SubscriptionsResource\PausedStatusDetailsPublic $paused;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paused' => $value instanceof \stdClass ? $this->paused = new \StripeSDK\DTOs\SubscriptionsResource\PausedStatusDetailsPublic($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
