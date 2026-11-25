<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\SessionLastError;

enum CodeEnum: string
{
    case Abandoned = 'abandoned';
    case ConsentDeclined = 'consent_declined';
    case CountryNotSupported = 'country_not_supported';
    case DeviceNotSupported = 'device_not_supported';
    case DocumentExpired = 'document_expired';
    case DocumentTypeNotSupported = 'document_type_not_supported';
    case DocumentUnverifiedOther = 'document_unverified_other';
    case EmailUnverifiedOther = 'email_unverified_other';
    case EmailVerificationDeclined = 'email_verification_declined';
    case IdNumberInsufficientDocumentData = 'id_number_insufficient_document_data';
    case IdNumberMismatch = 'id_number_mismatch';
    case IdNumberUnverifiedOther = 'id_number_unverified_other';
    case PhoneUnverifiedOther = 'phone_unverified_other';
    case PhoneVerificationDeclined = 'phone_verification_declined';
    case SelfieDocumentMissingPhoto = 'selfie_document_missing_photo';
    case SelfieFaceMismatch = 'selfie_face_mismatch';
    case SelfieManipulated = 'selfie_manipulated';
    case SelfieUnverifiedOther = 'selfie_unverified_other';
    case UnderSupportedAge = 'under_supported_age';
}
