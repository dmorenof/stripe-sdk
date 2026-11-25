<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount;

/**
 * linked_account_options_param
 */
final class FinancialConnectionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'return_url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsFiltersRequest $filters;
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsPermissionsCollection $permissions;
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\ConnectionsPrefetchCollection $prefetch;
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
