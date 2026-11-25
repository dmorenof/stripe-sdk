<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceTaxSettingsDefaults;

enum ProviderEnum: string
{
    case Anrok = 'anrok';
    case Avalara = 'avalara';
    case Sphere = 'sphere';
    case Stripe = 'stripe';
}
