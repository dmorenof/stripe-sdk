<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\WalletOptions;

/**
 * wallet_options_param
 */
final class OptionsLinkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\WalletOptions\Link\LinkDisplayEnum $display;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display' => is_string($value) ? $this->display = \StripeSDK\Enums\V1\Checkout\Sessions\Post\WalletOptions\Link\LinkDisplayEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
