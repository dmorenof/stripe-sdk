<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsCardMandateOptions;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
