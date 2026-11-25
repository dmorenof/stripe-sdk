<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\BillingMode\Flexible;

enum ProrationDiscountsEnum: string
{
    case Included = 'included';
    case Itemized = 'itemized';
}
