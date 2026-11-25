<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure;

enum AuthenticationFlowEnum: string
{
    case Challenge = 'challenge';
    case Frictionless = 'frictionless';
}
