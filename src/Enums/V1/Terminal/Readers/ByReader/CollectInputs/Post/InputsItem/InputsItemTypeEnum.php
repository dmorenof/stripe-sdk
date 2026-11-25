<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Terminal\Readers\ByReader\CollectInputs\Post\InputsItem;

enum InputsItemTypeEnum: string
{
    case Email = 'email';
    case Numeric = 'numeric';
    case Phone = 'phone';
    case Selection = 'selection';
    case Signature = 'signature';
    case Text = 'text';
}
