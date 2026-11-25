<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ByPaymentLinkRestrictionsRequestVariant1;

/**
 * completed_sessions_params
 */
final class CompletedSessionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'limit',
    ];

    public int $limit;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
