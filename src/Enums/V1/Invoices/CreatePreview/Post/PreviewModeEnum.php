<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post;

enum PreviewModeEnum: string
{
    case Next = 'next';
    case Recurring = 'recurring';
}
