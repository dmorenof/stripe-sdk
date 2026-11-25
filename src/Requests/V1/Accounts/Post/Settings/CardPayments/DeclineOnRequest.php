<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings\CardPayments;

/**
 * decline_charge_on_specs
 */
final class DeclineOnRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $avs_failure;
    public bool $cvc_failure;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'avs_failure' => is_bool($value) ? $this->avs_failure = $value : parent::assignMember($name, $value),
            'cvc_failure' => is_bool($value) ? $this->cvc_failure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
