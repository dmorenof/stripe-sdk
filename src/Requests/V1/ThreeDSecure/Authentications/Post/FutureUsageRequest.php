<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post;

/**
 * future_usage
 *
 * Contains information about future usage of this 3DS Authentication
 */
final class FutureUsageRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage\UsageInstallmentRequest $installment;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage\UsageRecurringRequest $recurring;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\UsageTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\UsageTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
