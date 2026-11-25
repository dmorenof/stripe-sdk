<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\ScheduleDetails\PhasesItem;

enum CycleAnchorEnum: string
{
    case Automatic = 'automatic';
    case PhaseStart = 'phase_start';
}
