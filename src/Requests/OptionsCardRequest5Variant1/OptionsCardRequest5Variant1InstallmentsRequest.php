<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest5Variant1;

/**
 * installments_param
 */
final class OptionsCardRequest5Variant1InstallmentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;
    public \StripeSDK\Requests\OptionsCardRequest5Variant1\Installments\InstallmentsPlanRequest $plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
