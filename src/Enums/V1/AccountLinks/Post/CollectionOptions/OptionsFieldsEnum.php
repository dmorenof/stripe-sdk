<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\AccountLinks\Post\CollectionOptions;

enum OptionsFieldsEnum: string
{
    case CurrentlyDue = 'currently_due';
    case EventuallyDue = 'eventually_due';
}
