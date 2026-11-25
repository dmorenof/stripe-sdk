<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodNaverPay;

enum FundingEnum: string
{
    case Card = 'card';
    case Points = 'points';
}
