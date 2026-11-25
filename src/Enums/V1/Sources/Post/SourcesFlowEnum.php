<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post;

enum SourcesFlowEnum: string
{
    case CodeVerification = 'code_verification';
    case None = 'none';
    case Receiver = 'receiver';
    case Redirect = 'redirect';
}
