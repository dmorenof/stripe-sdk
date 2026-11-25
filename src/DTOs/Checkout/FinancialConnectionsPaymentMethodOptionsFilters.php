<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * CheckoutFinancialConnectionsPaymentMethodOptionsFilters
 */
final class FinancialConnectionsPaymentMethodOptionsFilters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The account subcategories to use to filter for possible accounts to link. Valid subcategories are `checking` and `savings`.
     */
    public \StripeSDK\Collections\Checkout\FinancialConnectionsPaymentMethodOptionsFilters\AccountSubcategoriesCollection $account_subcategories;
}
