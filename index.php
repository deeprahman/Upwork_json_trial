<?php

  use classes\json_classes\JsonTOArray;
  include "classes/json_classes/JsonTOArray.php";

  $json_file_path="json/hours.json";
  $array = new JsonTOArray($json_file_path);

  $data=$array->jsonTOArray()['data'];


