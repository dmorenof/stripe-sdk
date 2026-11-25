<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsAutomaticPaymentMethodsSetupIntent
 */
final class FlowsAutomaticPaymentMethodsSetupIntent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls whether this SetupIntent will accept redirect-based payment methods.
     *
     * Redirect-based payment methods may require your customer to be redirected to a payment method's app or site for authentication or additional steps. To [confirm](https://docs.stripe.com/api/setup_intents/confirm) this SetupIntent, you may be required to provide a `return_url` to redirect customers back to your site after they authenticate or complete the setup.
     */
    public \StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsSetupIntent\AllowRedirectsEnum $allow_redirects;
    /**
     * Automatically calculates compatible payment methods
     */
    public ?bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_redirects' => is_string($value) ? $this->allow_redirects = \StripeSDK\Enums\Payment\FlowsAutomaticPaymentMethodsSetupIntent\AllowRedirectsEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => $value === null || is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
