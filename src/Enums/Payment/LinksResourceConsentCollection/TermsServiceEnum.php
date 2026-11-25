<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\LinksResourceConsentCollection;

enum TermsServiceEnum: string
{
    case None = 'none';
    case Required = 'required';
}
