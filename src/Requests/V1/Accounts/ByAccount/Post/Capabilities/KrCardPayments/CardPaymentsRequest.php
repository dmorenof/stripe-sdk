<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Capabilities\KrCardPayments;

/**
 * capability_param
 */
final class CardPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $requested;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requested' => is_bool($value) ? $this->requested = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
