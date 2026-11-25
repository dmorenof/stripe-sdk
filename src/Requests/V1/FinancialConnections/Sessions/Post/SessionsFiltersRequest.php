<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\FinancialConnections\Sessions\Post;

/**
 * filters_params
 *
 * Filters to restrict the kinds of accounts to collect.
 */
final class SessionsFiltersRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\FinancialConnections\Sessions\Post\Filters\AccountSubcategoriesCollection $account_subcategories;
    public string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    public \StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\Filters\MethodSupportEnum $require_payment_method_support;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'require_payment_method_support' => is_string($value) ? $this->require_payment_method_support = \StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\Filters\MethodSupportEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
