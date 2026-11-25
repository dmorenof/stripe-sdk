<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\ConfirmPaymentIntent\Post;

/**
 * confirm_config
 *
 * Configuration overrides for this confirmation, such as surcharge settings and return URL.
 */
final class ConfirmConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public string $return_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
