<?php
namespace Omist\Translate;


use Stichoza\GoogleTranslate\GoogleTranslate;





class Result
{
  /**
   * translate a word in specified language
   * 
   * 
   * @param string $word
   * @param string $lang_source
   * @param string $lang_target
   * 
   * @return string translated word
   * 
   * 
   * @since   1.0.0
   * @version 1.0.0
   * @author  Mahmudul Hasan Mithu
   */
  public static function word( string $word, string $lang_source, string $lang_target )
  {
    sleep( rand(3, 10) );
    $word = trim($word);
    $lang_source = trim($lang_source);
    $lang_target = trim($lang_target);
    $tr = new GoogleTranslate( $lang_target, $lang_source );    // target language, source language



    return $tr->translate( $word );
  }
}
