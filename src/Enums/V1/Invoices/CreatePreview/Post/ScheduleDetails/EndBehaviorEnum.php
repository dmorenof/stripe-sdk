<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails;

enum EndBehaviorEnum: string
{
    case Cancel = 'cancel';
    case Release = 'release';
}
