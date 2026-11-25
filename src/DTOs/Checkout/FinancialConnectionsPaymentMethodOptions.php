<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutFinancialConnectionsPaymentMethodOptions
 */
final class FinancialConnectionsPaymentMethodOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'return_url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Checkout\FinancialConnectionsPaymentMethodOptionsFilters $filters;
    /**
     * The list of permissions to request. The `payment_method` permission must be included.
     */
    public \StripeSDK\Collections\Checkout\FinancialConnectionsPaymentMethodOptions\PermissionsCollection $permissions;
    /**
     * Data features requested to be retrieved upon account creation.
     */
    public ?\StripeSDK\Collections\Checkout\FinancialConnectionsPaymentMethodOptions\PrefetchCollection $prefetch;
    /**
     * For webview integrations only. Upon completing OAuth login in the native browser, the user will be redirected to this URL to return to your app.
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
            'filters' => $value instanceof \stdClass ? $this->filters = new \StripeSDK\DTOs\Checkout\FinancialConnectionsPaymentMethodOptionsFilters($value) : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
