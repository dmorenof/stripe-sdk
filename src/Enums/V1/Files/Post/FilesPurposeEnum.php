<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Files\Post;

enum FilesPurposeEnum: string
{
    case AccountRequirement = 'account_requirement';
    case AdditionalVerification = 'additional_verification';
    case BusinessIcon = 'business_icon';
    case BusinessLogo = 'business_logo';
    case CustomerSignature = 'customer_signature';
    case DisputeEvidence = 'dispute_evidence';
    case IdentityDocument = 'identity_document';
    case IssuingRegulatoryReporting = 'issuing_regulatory_reporting';
    case PciDocument = 'pci_document';
    case PlatformTermsOfService = 'platform_terms_of_service';
    case TaxDocumentUserUpload = 'tax_document_user_upload';
    case TerminalAndroidApk = 'terminal_android_apk';
    case TerminalReaderSplashscreen = 'terminal_reader_splashscreen';
    case TerminalWifiCertificate = 'terminal_wifi_certificate';
    case TerminalWifiPrivateKey = 'terminal_wifi_private_key';
}
