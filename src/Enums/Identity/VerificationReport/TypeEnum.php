<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Identity\VerificationReport;

enum TypeEnum: string
{
    case Document = 'document';
    case IdNumber = 'id_number';
    case VerificationFlow = 'verification_flow';
}
