<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post;

enum UiModeEnum: string
{
    case Elements = 'elements';
    case EmbeddedPage = 'embedded_page';
    case Form = 'form';
    case HostedPage = 'hosted_page';
}
