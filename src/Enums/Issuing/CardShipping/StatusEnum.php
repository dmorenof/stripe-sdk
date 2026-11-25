<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShipping;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Delivered = 'delivered';
    case Failure = 'failure';
    case Pending = 'pending';
    case Returned = 'returned';
    case Shipped = 'shipped';
    case Submitted = 'submitted';
}
