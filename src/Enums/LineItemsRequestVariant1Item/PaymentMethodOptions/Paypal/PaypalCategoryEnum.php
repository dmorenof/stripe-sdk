<?php

declare(strict_types=1);

namespace StripeSDK\Enums\LineItemsRequestVariant1Item\PaymentMethodOptions\Paypal;

enum PaypalCategoryEnum: string
{
    case DigitalGoods = 'digital_goods';
    case Donation = 'donation';
    case PhysicalGoods = 'physical_goods';
}
