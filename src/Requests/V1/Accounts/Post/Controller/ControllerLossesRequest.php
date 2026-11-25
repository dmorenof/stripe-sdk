<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Controller;

/**
 * controller_losses_specs
 */
final class ControllerLossesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Accounts\Post\Controller\Losses\LossesPaymentsEnum $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payments' => is_string($value) ? $this->payments = \StripeSDK\Enums\V1\Accounts\Post\Controller\Losses\LossesPaymentsEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
