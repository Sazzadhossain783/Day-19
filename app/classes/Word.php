<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected  $result;

    public function __construct($post=null)
    {
        if ($post){
            $this->inputValue = $post['input_value'];
            $this->type = $post['type'];
        }
    }

    public function index()
{
//    if ($this->type =='word')
//    {
//        $this->result= str_word_count($this->inputValue);
//    }else{
//        $this->result = str_word_count($this->inputValue);
//    }
     $this->result = [
        'givenWord' => 'givem word'.$this->inputValue,
         'wordCount' => 'word'.str_word_count($this->inputValue),
         'characterCount' => 'total character'.strlen($this->inputValue),
    ];

return $this->result;
}
}