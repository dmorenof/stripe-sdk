<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\AfterCompletion;

enum CompletionTypeEnum: string
{
    case HostedConfirmation = 'hosted_confirmation';
    case Redirect = 'redirect';
}
