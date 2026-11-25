<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\RenderingTemplate;

enum StatusEnum: string
{
    case Active = 'active';
    case Archived = 'archived';
}
