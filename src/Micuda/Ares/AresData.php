<?php

namespace Micuda\Ares;

use Nette;
use Nette\Utils;

/**
 * @property string $in
 * @property string $tin
 * @property string $company
 * @property string $street
 * @property string $zip
 * @property string $city
 * @property string $country
 */
class AresData {

   use Nette\SmartObject;

   protected $data = [];

   public function getIn() {
      return $this->get('in');
   }

   public function setIn($val) {
      return $this->set('in', $val);
   }

   public function getTin() {
      return $this->get('tin');
   }

   public function setTin($val) {
      return $this->set('tin', $val);
   }

   public function getCompany() {
      return $this->get('company');
   }

   public function setCompany($val) {
      return $this->set('company', $val);
   }

   public function getStreet() {
      return $this->get('street');
   }

   public function setStreet($val) {
      return $this->set('street', $val);
   }

   public function getZip() {
      return $this->get('zip');
   }

   public function setZip($val) {
      return $this->set('zip', $val);
   }

   public function getCity() {
      return $this->get('city');
   }

   public function setCity($val) {
      return $this->set('city', $val);
   }

   public function getCountry() {
      return $this->get('country');
   }

   public function setCountry($val) {
      return $this->set('country', $val);
   }

   /**
    *
    * @param string $key
    * @param mixed  $value
    * @return self
    */
   protected function set($key, $value) {
      $this->data[$key] = strval($value);
      return $this;
   }

   /**
    * @param string $key
    * @return string
    */
   protected function get($key) {
      return Utils\Arrays::get($this->data, $key, NULL);
   }

   /**
    * @return array
    */
   public function toArray() {
      return $this->data;
   }

   /**
    * Resets the data.
    * @return $this
    */
   public function reset() {
      $this->data = [];
      return $this;
   }

}
