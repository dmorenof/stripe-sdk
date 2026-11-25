<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\LinksResourceAfterCompletion;

enum TypeEnum: string
{
    case HostedConfirmation = 'hosted_confirmation';
    case Redirect = 'redirect';
}
