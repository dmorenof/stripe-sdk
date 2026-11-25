<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Identity\VerificationReports\Get\Query;

enum QueryTypeEnum: string
{
    case Document = 'document';
    case IdNumber = 'id_number';
}
