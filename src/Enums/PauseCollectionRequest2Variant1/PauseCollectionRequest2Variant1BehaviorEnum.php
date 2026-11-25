<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseCollectionRequest2Variant1;

enum PauseCollectionRequest2Variant1BehaviorEnum: string
{
    case KeepAsDraft = 'keep_as_draft';
    case MarkUncollectible = 'mark_uncollectible';
    case Void_ = 'void';
}
