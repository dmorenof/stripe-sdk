<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\IdNumberReport;

enum NumberTypeEnum: string
{
    case BrCpf = 'br_cpf';
    case SgNric = 'sg_nric';
    case UsSsn = 'us_ssn';
}
