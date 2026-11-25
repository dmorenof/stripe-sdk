<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings;

enum ProrationBehaviorEnum: string
{
    case AlwaysInvoice = 'always_invoice';
    case CreateProrations = 'create_prorations';
    case None = 'none';
}
