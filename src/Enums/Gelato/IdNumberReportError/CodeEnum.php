<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\IdNumberReportError;

enum CodeEnum: string
{
    case IdNumberInsufficientDocumentData = 'id_number_insufficient_document_data';
    case IdNumberMismatch = 'id_number_mismatch';
    case IdNumberUnverifiedOther = 'id_number_unverified_other';
}
