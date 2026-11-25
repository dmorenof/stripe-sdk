<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBlikRequest5Variant1;

/**
 * payment_intent_payment_method_options_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: unix-time
     */
    public int $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
