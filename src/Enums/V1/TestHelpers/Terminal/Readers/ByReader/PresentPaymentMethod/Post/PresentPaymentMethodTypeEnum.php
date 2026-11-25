<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post;

enum PresentPaymentMethodTypeEnum: string
{
    case Card = 'card';
    case CardPresent = 'card_present';
    case InteracPresent = 'interac_present';
}
