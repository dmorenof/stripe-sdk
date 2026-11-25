<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\InvoiceRenderingTemplates\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Archived = 'archived';
}
