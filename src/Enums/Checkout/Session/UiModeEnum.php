<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum UiModeEnum: string
{
    case Elements = 'elements';
    case EmbeddedPage = 'embedded_page';
    case Form = 'form';
    case HostedPage = 'hosted_page';
}
