<?php

declare(strict_types=1);

namespace StripeSDK\Requests\TokensCardRequestVariant1;

/**
 * networks_param_specs
 */
final class TokensCardRequestVariant1NetworksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\TokensCardRequestVariant1\Networks\NetworksPreferredEnum $preferred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'preferred' => is_string($value) ? $this->preferred = \StripeSDK\Enums\TokensCardRequestVariant1\Networks\NetworksPreferredEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
