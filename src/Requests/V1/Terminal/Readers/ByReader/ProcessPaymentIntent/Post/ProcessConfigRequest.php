<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessPaymentIntent\Post;

/**
 * process_config
 *
 * Configuration overrides for this transaction, such as tipping and customer cancellation settings.
 */
final class ProcessConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\ProcessPaymentIntent\Post\ProcessConfig\AllowRedisplayEnum $allow_redisplay;
    public bool $enable_customer_cancellation;
    public string $return_url;
    public bool $skip_tipping;
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessPaymentIntent\Post\ProcessConfig\ConfigTippingRequest $tipping;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redisplay' => is_string($value) ? $this->allow_redisplay = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\ProcessPaymentIntent\Post\ProcessConfig\AllowRedisplayEnum::from($value) : parent::assignMember($name, $value),
            'enable_customer_cancellation' => is_bool($value) ? $this->enable_customer_cancellation = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'skip_tipping' => is_bool($value) ? $this->skip_tipping = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
