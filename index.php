<?php
class Index
{
    protected $str ;
    public function __construct()
    {
        $this->str='这样不会被禁言啊';
        echo $this->str;
    }
}
$Index = new Index();


