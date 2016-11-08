<?php
namespace Micuda\Ares\Request;

interface IRequest {

   function getData($in = NULL);

   function reset();
}