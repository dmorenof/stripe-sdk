<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Sessions\Post\FlowData\AfterCompletion;

enum CompletionTypeEnum: string
{
    case HostedConfirmation = 'hosted_confirmation';
    case PortalHomepage = 'portal_homepage';
    case Redirect = 'redirect';
}
