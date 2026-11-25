<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering\Pdf;

enum PageSizeEnum: string
{
    case A4 = 'a4';
    case Auto = 'auto';
    case Letter = 'letter';
}
