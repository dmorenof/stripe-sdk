<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CustomerSessions\Post\Components;

/**
 * mobile_payment_element_param
 */
final class PaymentElementRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public \StripeSDK\Requests\V1\CustomerSessions\Post\Components\MobilePaymentElement\ElementFeaturesRequest $features;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
