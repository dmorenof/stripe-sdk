<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsFlowAfterCompletion
 */
final class FlowsFlowAfterCompletion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Configuration when `after_completion.type=hosted_confirmation`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsAfterCompletionHostedConfirmation $hosted_confirmation;
    /**
     * Configuration when `after_completion.type=redirect`.
     */
    public ?\StripeSDK\DTOs\Portal\FlowsAfterCompletionRedirect $redirect;
    /**
     * The specified type of behavior after the flow is completed.
     */
    public \StripeSDK\Enums\Portal\FlowsFlowAfterCompletion\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_confirmation' => $value === null || $value instanceof \stdClass ? $this->hosted_confirmation = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsAfterCompletionHostedConfirmation($value) : parent::assignMember($name, $value),
            'redirect' => $value === null || $value instanceof \stdClass ? $this->redirect = $value === null ? null : new \StripeSDK\DTOs\Portal\FlowsAfterCompletionRedirect($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Portal\FlowsFlowAfterCompletion\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
