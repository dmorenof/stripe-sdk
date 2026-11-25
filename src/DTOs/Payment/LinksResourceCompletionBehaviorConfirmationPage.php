<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCompletionBehaviorConfirmationPage
 */
final class LinksResourceCompletionBehaviorConfirmationPage extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'custom_message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The custom message that is displayed to the customer after the purchase is complete.
     */
    public ?string $custom_message {
        set {
            $this->assigning('custom_message', $value);
            $this->custom_message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_message' => $value === null || is_string($value) ? $this->custom_message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
