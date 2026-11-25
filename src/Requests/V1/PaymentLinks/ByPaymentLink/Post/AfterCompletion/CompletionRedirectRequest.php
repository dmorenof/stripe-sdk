<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion;

/**
 * after_completion_redirect_params
 */
final class CompletionRedirectRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
