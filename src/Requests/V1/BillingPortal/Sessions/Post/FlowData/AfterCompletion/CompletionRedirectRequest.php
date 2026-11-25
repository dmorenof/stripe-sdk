<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion;

/**
 * after_completion_redirect_param
 */
final class CompletionRedirectRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'return_url',
    ];

    public string $return_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
