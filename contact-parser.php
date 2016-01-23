<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $contents);
    fclose($handle);
    foreach ($contacts as $key=>$items) {
      $innerArray = explode('|', $items);
      $newArray = array('name'=>$innerArray[0], 'number'=>$innerArray[1]);
      $number = $newArray['number'];
      $newArray['number'] = substr($number,0,3) . '-' . substr($number,3,3) . '-' . substr($number,6,4);
      $contacts[$key] = $newArray;
    }
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
