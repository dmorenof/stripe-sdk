<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TerminalReaderReaderResource\Input;

enum TypeEnum: string
{
    case Email = 'email';
    case Numeric = 'numeric';
    case Phone = 'phone';
    case Selection = 'selection';
    case Signature = 'signature';
    case Text = 'text';
}
