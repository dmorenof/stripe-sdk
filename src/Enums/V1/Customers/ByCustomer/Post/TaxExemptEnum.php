<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\Post;

enum TaxExemptEnum: string
{
    case Empty_ = '';
    case Exempt = 'exempt';
    case None = 'none';
    case Reverse = 'reverse';
}
