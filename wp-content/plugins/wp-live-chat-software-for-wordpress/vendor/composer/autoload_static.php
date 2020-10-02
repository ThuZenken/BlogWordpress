<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a079a780d67e0e0c9ff93473f79b247
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LiveChat\\' => 9,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LiveChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin_files',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'LiveChat\\Drivers\\HttpClient' => __DIR__ . '/../..' . '/plugin_files/Drivers/HttpClient.class.php',
        'LiveChat\\Drivers\\HttpClientTest' => __DIR__ . '/../..' . '/plugin_files/tests/drivers/HttpClientTest.class.php',
        'LiveChat\\Drivers\\WP_Error' => __DIR__ . '/../..' . '/plugin_files/tests/drivers/HttpClientTest.class.php',
        'LiveChat\\Exceptions\\ApiClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ApiClientException.class.php',
        'LiveChat\\Exceptions\\ErrorCodes' => __DIR__ . '/../..' . '/plugin_files/Exceptions/ErrorCode.class.php',
        'LiveChat\\Exceptions\\HttpClientException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/HttpClientException.class.php',
        'LiveChat\\Exceptions\\InvalidTokenException' => __DIR__ . '/../..' . '/plugin_files/Exceptions/InvalidTokenException.class.php',
        'LiveChat\\Helpers\\ConfirmIdentityNoticeHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/ConfirmIdentityNoticeHelper.class.php',
        'LiveChat\\Helpers\\ConnectNoticeHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/ConnectNoticeHelper.class.php',
        'LiveChat\\Helpers\\ConnectServiceHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/ConnectServiceHelper.class.php',
        'LiveChat\\Helpers\\DeactivationFeedbackFormHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/DeactivationFeedbackFormHelper.class.php',
        'LiveChat\\Helpers\\LiveChatHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/LiveChatHelper.class.php',
        'LiveChat\\Helpers\\ResourcesTabHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/ResourcesTabHelper.class.php',
        'LiveChat\\Helpers\\ReviewNoticeHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/ReviewNoticeHelper.class.php',
        'LiveChat\\Helpers\\TrackingCodeHelper' => __DIR__ . '/../..' . '/plugin_files/Helpers/TrackingCodeHelper.class.php',
        'LiveChat\\LiveChat' => __DIR__ . '/../..' . '/plugin_files/LiveChat.class.php',
        'LiveChat\\LiveChatAdmin' => __DIR__ . '/../..' . '/plugin_files/LiveChatAdmin.class.php',
        'LiveChat\\Services\\ApiClient' => __DIR__ . '/../..' . '/plugin_files/Services/ApiClient.class.php',
        'LiveChat\\Services\\ApiClientTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ApiClientTest.class.php',
        'LiveChat\\Services\\CertProvider' => __DIR__ . '/../..' . '/plugin_files/Services/CertProvider.class.php',
        'LiveChat\\Services\\CertProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/CertProviderTest.class.php',
        'LiveChat\\Services\\ConnectToken' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectToken.class.php',
        'LiveChat\\Services\\ConnectTokenProvider' => __DIR__ . '/../..' . '/plugin_files/Services/ConnectTokenProvider.class.php',
        'LiveChat\\Services\\ConnectTokenProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ConnectTokenProviderTest.class.php',
        'LiveChat\\Services\\ConnectTokenTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/ConnectTokenTest.class.php',
        'LiveChat\\Services\\MockData' => __DIR__ . '/../..' . '/plugin_files/tests/services/UserTest.class.php',
        'LiveChat\\Services\\ModuleConfiguration' => __DIR__ . '/../..' . '/plugin_files/Services/ModuleConfiguration.class.php',
        'LiveChat\\Services\\Store' => __DIR__ . '/../..' . '/plugin_files/Services/Store.class.php',
        'LiveChat\\Services\\StoreTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/StoreTest.class.php',
        'LiveChat\\Services\\TemplateParser' => __DIR__ . '/../..' . '/plugin_files/Services/TemplateParser.class.php',
        'LiveChat\\Services\\TemplateParserTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/TemplateParserTest.class.php',
        'LiveChat\\Services\\TokenValidator' => __DIR__ . '/../..' . '/plugin_files/Services/TokenValidator.class.php',
        'LiveChat\\Services\\TokenValidatorTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/TokenValidatorTest.class.php',
        'LiveChat\\Services\\UrlProvider' => __DIR__ . '/../..' . '/plugin_files/Services/UrlProvider.class.php',
        'LiveChat\\Services\\UrlProviderTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/UrlProviderTest.class.php',
        'LiveChat\\Services\\User' => __DIR__ . '/../..' . '/plugin_files/Services/User.class.php',
        'LiveChat\\Services\\UserTest' => __DIR__ . '/../..' . '/plugin_files/tests/services/UserTest.class.php',
        'LiveChat\\Services\\WP_Error' => __DIR__ . '/../..' . '/plugin_files/tests/services/ApiClientTest.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a079a780d67e0e0c9ff93473f79b247::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a079a780d67e0e0c9ff93473f79b247::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a079a780d67e0e0c9ff93473f79b247::$classMap;

        }, null, ClassLoader::class);
    }
}
