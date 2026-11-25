<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Subscription pause detail
 *
 * Information on the `type=subscription` pause.
 */
final class PausedStatusDetailsSubscription extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The reason that the subscription was paused.
     */
    public \StripeSDK\Enums\SubscriptionsResource\PausedStatusDetailsSubscription\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\SubscriptionsResource\PausedStatusDetailsSubscription\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
