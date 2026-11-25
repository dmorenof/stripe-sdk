<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentFlowsPrivatePaymentMethodsFinancialConnectionsCommonLinkedAccountOptionsFilters
 */
final class FlowsPrivatePaymentMethodsFinancialConnectionsCommonLinkedAccountOptionsFilters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The account subcategories to use to filter for possible accounts to link. Valid subcategories are `checking` and `savings`.
     */
    public \StripeSDK\Collections\Payment\FlowsPrivatePaymentMethodsFinancialConnectionsCommonLinkedAccountOptionsFilters\AccountSubcategoriesCollection $account_subcategories;
}
