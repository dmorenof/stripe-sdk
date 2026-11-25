<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsAmountDetailsResourceError;

enum CodeEnum: string
{
    case AmountDetailsAmountMismatch = 'amount_details_amount_mismatch';
    case AmountDetailsTaxShippingDiscountGreaterThanAmount = 'amount_details_tax_shipping_discount_greater_than_amount';
}
