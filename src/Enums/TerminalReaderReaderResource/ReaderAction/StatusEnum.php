<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction;

enum StatusEnum: string
{
    case Failed = 'failed';
    case InProgress = 'in_progress';
    case Succeeded = 'succeeded';
}
