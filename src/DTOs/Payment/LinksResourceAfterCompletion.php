<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceAfterCompletion
 */
final class LinksResourceAfterCompletion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Payment\LinksResourceCompletionBehaviorConfirmationPage $hosted_confirmation;
    public \StripeSDK\DTOs\Payment\LinksResourceCompletionBehaviorRedirect $redirect;
    /**
     * The specified behavior after the purchase is complete.
     */
    public \StripeSDK\Enums\Payment\LinksResourceAfterCompletion\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hosted_confirmation' => $value instanceof \stdClass ? $this->hosted_confirmation = new \StripeSDK\DTOs\Payment\LinksResourceCompletionBehaviorConfirmationPage($value) : parent::assignMember($name, $value),
            'redirect' => $value instanceof \stdClass ? $this->redirect = new \StripeSDK\DTOs\Payment\LinksResourceCompletionBehaviorRedirect($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\LinksResourceAfterCompletion\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
