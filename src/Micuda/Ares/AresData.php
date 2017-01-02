<?php

namespace Micuda\Ares;

use Nette;
use Nette\Utils;

/**
 * @property string $in
 * @property string $tin
 * @property string $company
 * @property string $street
 * @property string $buildingNumber
 * @property string $postalCode
 * @property string $city
 * @property string $country
 * @property string $countryNumeric3Code
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

   public function getBuildingNumber() {
      return $this->get('buildingNumber');
   }

   public function setBuildingNumber($val) {
      return $this->set('buildingNumber', $val);
   }

   public function getPostalCode() {
      return $this->get('postalCode');
   }

   public function setPostalCode($val) {
      return $this->set('postalCode', $val);
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

   public function getCountryNumeric3Code() {
      return $this->get('countryNumeric3Code');
   }

   public function setCountryNumeric3Code($val) {
      return $this->set('countryNumeric3Code', $val);
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
