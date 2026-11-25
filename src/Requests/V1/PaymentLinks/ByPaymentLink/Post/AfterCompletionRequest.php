<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

/**
 * after_completion_params
 *
 * Behavior after the purchase is complete.
 */
final class AfterCompletionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion\HostedConfirmationRequest $hosted_confirmation;
    public \StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion\CompletionRedirectRequest $redirect;
    public \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion\CompletionTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion\CompletionTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
