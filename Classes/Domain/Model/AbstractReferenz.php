<?php

namespace Vendor\NewsExtend\Domain\Model;

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class AbstractReferenz extends \GeorgRinger\News\Domain\Model\NewsDefault {
   /**
    * @var string
    */
   protected $subtitle;



   /**
    * Get title
    *
    * @return string
    */
   public function getSubtitle()
   {
      // return "teststring";
      return $this->subtitle;
   }

   /**
    * Set title
    *
    * @param string $subtitle subtitle
    * @return void
    */
   public function setSubtitle($subtitle)
   {
      $this->subtitle = $subtitle;
   }
   


}
