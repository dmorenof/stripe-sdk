<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsPaypalAmountDetailsLineItemPaymentMethodOptions;

enum CategoryEnum: string
{
    case DigitalGoods = 'digital_goods';
    case Donation = 'donation';
    case PhysicalGoods = 'physical_goods';
}
