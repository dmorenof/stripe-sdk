<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsAfterCompletionRedirect
 */
final class FlowsAfterCompletionRedirect extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'return_url',
    ];

    protected const array VALIDATION = [
        'return_url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The URL the customer will be redirected to after the flow is completed.
     */
    public string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
