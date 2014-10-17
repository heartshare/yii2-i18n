<?php
/** 
 * @author: Harry Tang (giaduy@gmail.com)
 * @link: http://www.greyneuron.com 
 * @copyright: Grey Neuron
 */
namespace harrytang\i18n;

class MyPhpMessageSource extends \yii\i18n\PhpMessageSource {


    /**
     * Insert missing translation to php file
     * @param $event The Missing Translation event
     */
    public function insertMissingTranslation($event)
    {

    }
} 