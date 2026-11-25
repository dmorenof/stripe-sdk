<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Charges\ByCharge\Post\FraudDetails;

enum UserReportEnum: string
{
    case Empty_ = '';
    case Fraudulent = 'fraudulent';
    case Safe = 'safe';
}
