<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account;

enum TypeEnum: string
{
    case Custom = 'custom';
    case Express = 'express';
    case None = 'none';
    case Standard = 'standard';
}
