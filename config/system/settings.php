<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$aTNGOTJOdXgyaUNIdXB2ag$UMM56uO+LKB3KA64TAZ28w7+kRwM+YXnENx9nj95ODE',
        'languageDebug' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ],
        ],
    ],
    'EXTCONF' => [
        'helhum-typo3-console' => [
            'initialUpgradeDone' => '12.4',
        ],
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'dlf' => [
            'annotationServerUrl' => '',
            'embedded3dviewer' => [
                'defaultViewer' => '',
                'viewerModelFormatMapping' => '',
            ],
            'files' => [
                'useGroupsAudio' => 'AUDIO',
                'useGroupsDownload' => 'DOWNLOAD',
                'useGroupsFulltext' => 'FULLTEXT',
                'useGroupsImage' => 'DEFAULT,MAX',
                'useGroupsScore' => 'SCORE',
                'useGroupsThumbnail' => 'THUMBS',
                'useGroupsVideo' => 'VIDEO,DEFAULT',
                'useGroupsWaveform' => 'WAVEFORM',
            ],
            'general' => [
                'caching' => '0',
                'enableInternalProxy' => '0',
                'forceAbsoluteUrl' => '0',
                'forceAbsoluteUrlHttps' => '0',
                'publishNewCollections' => '1',
                'requiredMetadataFields' => 'document_format,record_id',
                'unhideOnIndex' => '0',
                'useExternalApisForMetadata' => '0',
                'userAgent' => 'Kitodo.Presentation',
            ],
            'iiif' => [
                'indexAnnotations' => '0',
                'thumbnailHeight' => '150',
                'thumbnailWidth' => '150',
            ],
            'solr' => [
                'allowCoreDelete' => '0',
                'connect' => '0',
                'fields' => [
                    'autocomplete' => 'autocomplete',
                    'collection' => 'collection',
                    'date' => 'date',
                    'default' => 'default',
                    'fulltext' => 'fulltext',
                    'geom' => 'geom',
                    'id' => 'id',
                    'license' => 'license',
                    'location' => 'location',
                    'page' => 'page',
                    'partof' => 'partof',
                    'pid' => 'pid',
                    'purl' => 'purl',
                    'recordId' => 'record_id',
                    'restrictions' => 'restrictions',
                    'root' => 'root',
                    'sid' => 'sid',
                    'terms' => 'terms',
                    'thumbnail' => 'thumbnail',
                    'timestamp' => 'timestamp',
                    'title' => 'title',
                    'toplevel' => 'toplevel',
                    'type' => 'type',
                    'uid' => 'uid',
                    'urn' => 'urn',
                    'volume' => 'volume',
                ],
                'host' => 'localhost',
                'https' => '0',
                'pass' => '',
                'path' => '/',
                'port' => '8983',
                'timeout' => '10',
                'user' => '',
            ],
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
            'requireCacheHashPresenceParameters' => [
                'tx_dlf[id]',
            ],
        ],
        'debug' => true,
        'disableNoCacheParameter' => true,
        'pageNotFoundOnCHashError' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '3a562d6fb6d0e057296d756799bee01c3dc58b7680dbc66d8419df76666f68f33d41306775d0296ceda2b837a84e83c2',
        'exceptionalErrors' => 12290,
        'features' => [
            'security.usePasswordPolicyForFrontendUsers' => true,
            'yamlImportsFollowDeclarationOrder' => true,
        ],
        'sitename' => 'DFG-Viewer',
        'systemMaintainers' => [
            1,
        ],
    ],
];
