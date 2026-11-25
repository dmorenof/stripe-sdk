<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\FlowsFlowAfterCompletion;

enum TypeEnum: string
{
    case HostedConfirmation = 'hosted_confirmation';
    case PortalHomepage = 'portal_homepage';
    case Redirect = 'redirect';
}
