<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\AccountLinks\Post;

enum AccountLinksTypeEnum: string
{
    case AccountOnboarding = 'account_onboarding';
    case AccountUpdate = 'account_update';
}
