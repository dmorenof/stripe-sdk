<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\PauseCollection;

enum BehaviorEnum: string
{
    case KeepAsDraft = 'keep_as_draft';
    case MarkUncollectible = 'mark_uncollectible';
    case Void_ = 'void';
}
