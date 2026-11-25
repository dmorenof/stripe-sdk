<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Climate\Order;

enum CancellationReasonEnum: string
{
    case Expired = 'expired';
    case ProductUnavailable = 'product_unavailable';
    case Requested = 'requested';
}
