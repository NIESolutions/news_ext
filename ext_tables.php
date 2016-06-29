<?php
// define new fields
$tempColumns = array(
   'subtitle' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.subtitle',
      'config' => array(
         'type' => 'input',
         'size' => 30,
         'eval' => 'trim'
      ),
   ),
   'link' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.link',
      'config' => array(
         'type' => 'input',
         'size' => 30,
         'eval' => 'trim'
      ),
   ),
   'iswebsite' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.isWebsite',
      'config' => array(
         'type' => 'check'
      ),
   ),
   'ismobile' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.isMobile',
      'config' => array(
         'type' => 'check'
      ),
   ),
   'istablet' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.isTablet',
      'config' => array(
         'type' => 'check'
      ),
   ),
   'isdesktop' => array(
      'exclude' => 0,
      'label' => 'LLL:EXT:news_extend/Resources/Private/Language/locallang_db.xlf:tx_newsextend_domain_model_news.isDesktop',
      'config' => array(
         'type' => 'check'
      ),
   ),
);



if ( \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {

   


   // add field to tca
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
      'tx_news_domain_model_news',
      $tempColumns
   );

   // add new field subtitle after title
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
      "tx_news_domain_model_news", 
      'subtitle, iswebsite, ismobile, istablet, isdesktop, link', 
      '3', 
      'after:title'
   );
      \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
      "tx_news_domain_model_news", 
      'subtitle', 
      '4', 
      'after:title'
   );

}


