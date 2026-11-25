<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * invoice_payment_method_options_us_bank_account_linked_account_options_filters
 */
final class PaymentMethodOptionsUsBankAccountLinkedAccountOptionsFilters extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The account subcategories to use to filter for possible accounts to link. Valid subcategories are `checking` and `savings`.
     */
    public \StripeSDK\Collections\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptionsFilters\AccountSubcategoriesCollection $account_subcategories;
}
