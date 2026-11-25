<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodInteracPresent;

enum ReadMethodEnum: string
{
    case ContactEmv = 'contact_emv';
    case ContactlessEmv = 'contactless_emv';
    case ContactlessMagstripeMode = 'contactless_magstripe_mode';
    case MagneticStripeFallback = 'magnetic_stripe_fallback';
    case MagneticStripeTrack2 = 'magnetic_stripe_track2';
}
