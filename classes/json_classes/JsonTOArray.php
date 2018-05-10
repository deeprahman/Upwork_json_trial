<?php
  namespace classes\json_classes;

  class JsonTOArray{

    protected $json;

    public function __construct(string $json_file_path)
    {
      $this->json = file_get_contents($json_file_path);
    }

    public function jsonTOArray():array
    {
      $array = json_decode($this->json,TRUE);
      return $array;
    }
  }
