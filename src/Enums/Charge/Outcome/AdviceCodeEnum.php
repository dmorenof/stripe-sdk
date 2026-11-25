<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Charge\Outcome;

enum AdviceCodeEnum: string
{
    case ConfirmCardData = 'confirm_card_data';
    case DoNotTryAgain = 'do_not_try_again';
    case TryAgainLater = 'try_again_later';
}
