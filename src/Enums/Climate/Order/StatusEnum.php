<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Climate\Order;

enum StatusEnum: string
{
    case AwaitingFunds = 'awaiting_funds';
    case Canceled = 'canceled';
    case Confirmed = 'confirmed';
    case Delivered = 'delivered';
    case Open = 'open';
}
