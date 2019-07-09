<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('abexto_xbootstrap_components', 'Configuration/TypoScript', 'Abexto XBootstrap Components: All Default');

    }
);
