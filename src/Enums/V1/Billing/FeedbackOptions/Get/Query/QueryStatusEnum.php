<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\FeedbackOptions\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
