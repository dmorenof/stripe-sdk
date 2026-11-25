<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem\AutomaticTax\Liability;

enum LiabilityTypeEnum: string
{
    case Account = 'account';
    case Self_ = 'self';
}
