<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntentNextActionWechatPayRedirectToIOSApp
 */
final class IntentNextActionWechatPayRedirectToIosApp extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'native_url',
    ];

    protected const array VALIDATION = [
        'native_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An universal link that redirect to WeChat Pay app
     */
    public string $native_url {
        set {
            $this->assigning('native_url', $value);
            $this->native_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'native_url' => is_string($value) ? $this->native_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
