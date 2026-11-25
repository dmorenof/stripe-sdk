<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectPaymentMethod\Post\CollectConfig;

/**
 * tipping_config
 */
final class ConfigTippingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public int $amount_eligible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_eligible' => is_int($value) ? $this->amount_eligible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
