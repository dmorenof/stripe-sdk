<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post\AfterCompletion;

/**
 * after_completion_confirmation_page_params
 */
final class HostedConfirmationRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'custom_message' => [
            'maxLength' => 500,
        ],
    ];

    public string $custom_message {
        set {
            $this->assigning('custom_message', $value);
            $this->custom_message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_message' => is_string($value) ? $this->custom_message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
