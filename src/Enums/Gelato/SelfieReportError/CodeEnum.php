<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\SelfieReportError;

enum CodeEnum: string
{
    case SelfieDocumentMissingPhoto = 'selfie_document_missing_photo';
    case SelfieFaceMismatch = 'selfie_face_mismatch';
    case SelfieManipulated = 'selfie_manipulated';
    case SelfieUnverifiedOther = 'selfie_unverified_other';
}
