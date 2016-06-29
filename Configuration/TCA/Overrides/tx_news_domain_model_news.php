<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


if (ExtensionManagementUtility::isLoaded('news')) {
	// register new news types

	 $GLOBALS['TCA']['tx_news_domain_model_news']['types']['3'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	 $GLOBALS['TCA']['tx_news_domain_model_news']['types']['4'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	
	//$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogImage'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	//$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogVideo'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];
	//$GLOBALS['TCA']['tx_news_domain_model_news']['types']['blogEvent'] = $GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'];

	// add individual type icons
	//$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogText'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogText.png';
	//$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogImage'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogImage.png';
	//$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogVideo'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogVideo.png';
	//$GLOBALS['TCA']['tx_news_domain_model_news']['ctrl']['typeicons']['blogEvent'] = ExtensionManagementUtility::extRelPath('news_exampleextension') . 'Resources/Public/Icons/news_domain_model_news_blogEvent.png';


}