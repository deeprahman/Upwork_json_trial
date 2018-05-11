<?php
  use classes\json_classes\JsonTOArray;

  include "classes/json_classes/JsonTOArray.php";

  $json_file_path = "json/hours.json";
  $array = new JsonTOArray($json_file_path);

  $hours = $array->jsonTOArray()['data'];
  $array=null;
  foreach ($hours as $array1){
    foreach ($array1 as $key => $array2){
      $data[$key]=$array2;
    }
  }
  unset($hours);