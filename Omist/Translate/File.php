<?php
namespace Omist\Translate;


class File
{
  /**
   * get words from file
   * 
   * 
   * @return object key and value     of word
   * 
   * 
   * @since   1.0.0
   * @version 1.0.0
   * @author  Mahmudul Hasan Mithu
   */
  public static function words()
  {
    $file = $_FILES['words'];

    $words = file_get_contents($file['tmp_name']);
    
    return json_decode($words);
  }



}


