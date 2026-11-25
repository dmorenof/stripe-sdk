<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsAfterCompletionHostedConfirmation
 */
final class FlowsAfterCompletionHostedConfirmation extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'custom_message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A custom message to display to the customer after the flow is completed.
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
