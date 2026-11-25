<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceLinkAccountSessionFilters
 */
final class LinkAccountSessionFilters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Restricts the Session to subcategories of accounts that can be linked. Valid subcategories are: `checking`, `savings`, `mortgage`, `line_of_credit`, `credit_card`.
     */
    public ?\StripeSDK\Collections\BankConnectionsResource\LinkAccountSessionFilters\AccountSubcategoriesCollection $account_subcategories;
    /**
     * Country from which to filter accounts.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * Whether the Session should require that linked accounts support payments and retrieve account numbers before completion.
     */
    public \StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionFilters\MethodSupportEnum $require_payment_method_support;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'require_payment_method_support' => is_string($value) ? $this->require_payment_method_support = \StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionFilters\MethodSupportEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
