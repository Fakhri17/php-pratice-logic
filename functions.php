<?php 

function findContains($arrInput, $searchKey, $searchValue) {
  $result = [];
  foreach ($arrInput as $key => $value){
    if (strpos($value[$searchKey], $searchValue) !== false){
      // jika hasil dari strpos bukan false, maka ketemu
      array_push($result, $value);
      echo 'found! <br/>';
    } else {
      // tidak ketemu
      echo 'not found! <br/>';
    }
  }
  return $result;
}

function findSame($arrInput, $searchKey, $searchValue) {
  $result = null;
  foreach ($arrInput as $key => $value){
    if ($value[$searchKey] == $searchValue){
      return $result;
    }
  }
  return $result;
}