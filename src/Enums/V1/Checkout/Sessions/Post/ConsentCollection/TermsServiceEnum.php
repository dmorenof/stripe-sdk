<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\ConsentCollection;

enum TermsServiceEnum: string
{
    case None = 'none';
    case Required = 'required';
}
