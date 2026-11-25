<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentNextActionVerifyWithMicrodeposits;

enum MicrodepositTypeEnum: string
{
    case Amounts = 'amounts';
    case DescriptorCode = 'descriptor_code';
}
