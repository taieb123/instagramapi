<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:instagramapi/Resources/Private/Language/locallang_db.xlf:tx_instagramapi_domain_model_instagramapi',
        'label' => 'new_token',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'new_token,old_token,expires_in',
        'iconfile' => 'EXT:instagramapi/Resources/Public/Icons/tx_instagramapi_domain_model_instagramapi.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, new_token, old_token, expires_in',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, new_token, old_token, expires_in, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_instagramapi_domain_model_instagramapi',
                'foreign_table_where' => 'AND tx_instagramapi_domain_model_instagramapi.pid=###CURRENT_PID### AND tx_instagramapi_domain_model_instagramapi.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'new_token' => [
            'exclude' => true,
            'label' => 'LLL:EXT:instagramapi/Resources/Private/Language/locallang_db.xlf:tx_instagramapi_domain_model_instagramapi.new_token',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'old_token' => [
            'exclude' => true,
            'label' => 'LLL:EXT:instagramapi/Resources/Private/Language/locallang_db.xlf:tx_instagramapi_domain_model_instagramapi.old_token',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'expires_in' => [
            'exclude' => true,
            'label' => 'LLL:EXT:instagramapi/Resources/Private/Language/locallang_db.xlf:tx_instagramapi_domain_model_instagramapi.expires_in',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
    
    ],
];
