<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Terminal\Readers\Get\Query;

enum DeviceTypeEnum: string
{
    case BbposChipper2x = 'bbpos_chipper2x';
    case BbposWisepad3 = 'bbpos_wisepad3';
    case BbposWiseposE = 'bbpos_wisepos_e';
    case MobilePhoneReader = 'mobile_phone_reader';
    case SimulatedStripeS700 = 'simulated_stripe_s700';
    case SimulatedStripeS710 = 'simulated_stripe_s710';
    case SimulatedVerifoneM425 = 'simulated_verifone_m425';
    case SimulatedVerifoneP630 = 'simulated_verifone_p630';
    case SimulatedVerifoneUx700 = 'simulated_verifone_ux700';
    case SimulatedVerifoneV660p = 'simulated_verifone_v660p';
    case SimulatedWiseposE = 'simulated_wisepos_e';
    case StripeM2 = 'stripe_m2';
    case StripeS700 = 'stripe_s700';
    case StripeS710 = 'stripe_s710';
    case VerifoneP400 = 'verifone_P400';
    case VerifoneM425 = 'verifone_m425';
    case VerifoneP630 = 'verifone_p630';
    case VerifoneUx700 = 'verifone_ux700';
    case VerifoneV660p = 'verifone_v660p';
}
