<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Controller;

/**
 * controller_fees_specs
 */
final class ControllerFeesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Accounts\Post\Controller\Fees\FeesPayerEnum $payer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payer' => is_string($value) ? $this->payer = \StripeSDK\Enums\V1\Accounts\Post\Controller\Fees\FeesPayerEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
