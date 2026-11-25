<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\RefundPayment\Post;

/**
 * refund_payment_config
 *
 * Configuration overrides for this refund, such as customer cancellation settings.
 */
final class PaymentConfigRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enable_customer_cancellation;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enable_customer_cancellation' => is_bool($value) ? $this->enable_customer_cancellation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
