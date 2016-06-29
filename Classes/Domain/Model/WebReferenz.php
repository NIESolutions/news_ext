<?php
namespace Vendor\NewsExtend\Domain\Model;

/**
 * News model for default news
 *
 * @package TYPO3
 * @subpackage tx_news
 */
class WebReferenz extends AbstractReferenz {


    /**
    * @var string
    */
   protected $link;


    /**
    * @var bool
    */
   protected $iswebsite;

    /**
    * @var bool
    */
   protected $ismobile;

    /**
    * @var bool
    */
   protected $istablet;

    /**
    * @var bool
    */
   protected $isdesktop;





   /**
    * Get website
    *
    * @return bool
    */
   public function getIswebsite()
   {
      // return "teststring";
      return $this->iswebsite;
   }

   /**
    * Set website
    *
    * @param bool $iswebsite iswebsite
    * @return void
    */
   public function setIswebsite($isWebsite)
   {
      $this->iswebsite = $iswebsite;
   }


  
  

      /**
    * Get link
    *
    * @return string
    */
   public function getLink()
   {
      return $this->link;
   }

   /**
    * Set link
    *
    * @param string $link link
    * @return void
    */
   public function setLink($link)
   {
      $this->link = $link;
   }

   /**
    * Set isMobile
    *
    * @param bool $isMobile isMobile
    * @return void
    */
   public function setIsmobile($ismobile)
   {
      $this->ismobile = $ismobile;
   }

      /**
    * Get isMobile
    *
    * @return bool
    */
   public function getIsmobile()
   {
      // return "teststring";
      return $this->ismobile;
   }




      /**
    * Get isTablet
    *
    * @return bool
    */
   public function getIstablet()
   {
      // return "teststring";
      return $this->istablet;
   }

   /**
    * Set isTablet
    *
    * @param bool $istablet istablet
    * @return void
    */
   public function setIstablet($isTablet)
   {
      $this->istablet = $istablet;
   }


      /**
    * Get isdesktop
    *
    * @return bool
    */
   public function getIsdesktop()
   {
      // return "teststring";
      return $this->isdesktop;
   }

   /**
    * Set isdesktop
    *
    * @param bool $isdesktop isdesktop
    * @return void
    */
   public function getIsdesktop($isdesktop)
   {
      $this->isdesktop = $isdesktop;
   }

   




}
