<?php

namespace InvalidArgumentException;

use InvalidArgumentException;

class Translation
{
   // const DETECT_YA_URL = 'https://translate.yandex.net/api/v1.5/tr.json/detect';
    const TRANSLATE_YA_URL = 'https://translate.yandex.net/api/v1.5/tr.json/translate';

    public $key;

    /**
     * Translation constructor.
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }


//    public function init(){
//        parent::init();
//        if (empty($this->key)){
//            throw new InvalidArgumentException("Field <b>$this->key</b> is required");
//        }
//    }

    public  function translate_text($format="plain"){
        if (empty($this->key)){
            throw new InvalidArgumentException("Field <b>$this->key</b> is required");
        }

        $values = array(
          'key' => $this->key,
          'text' => $_GET['text'],
          'lang' => $_GET['lang'],
          'format' => $format //== "text" //? 'plain' : $format,
        );

        $formData = http_build_query($values);

        $ch = curl_init(self::TRANSLATE_YA_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);

        $json = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($json, true);
        if ($data['code']==200){
            return $data['text'];
        }
        return $data;

    }























}