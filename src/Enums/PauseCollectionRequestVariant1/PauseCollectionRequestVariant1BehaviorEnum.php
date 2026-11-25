<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseCollectionRequestVariant1;

enum PauseCollectionRequestVariant1BehaviorEnum: string
{
    case KeepAsDraft = 'keep_as_draft';
    case MarkUncollectible = 'mark_uncollectible';
    case Void_ = 'void';
}
