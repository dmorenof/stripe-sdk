<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoiceitem;

enum FrozenFieldsEnum: string
{
    case Discounts = 'discounts';
    case Pricing = 'pricing';
    case Quantity = 'quantity';
}
