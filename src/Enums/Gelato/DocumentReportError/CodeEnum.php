<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\DocumentReportError;

enum CodeEnum: string
{
    case DocumentExpired = 'document_expired';
    case DocumentTypeNotSupported = 'document_type_not_supported';
    case DocumentUnverifiedOther = 'document_unverified_other';
}
