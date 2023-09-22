<?php

namespace apply\Author;

class Author{
    private $fname,$lname;

    public function __construct($fname,$lname){
        $this->fname=$fname;
        $this->lname=$lname;
    }
    

    public function getFname(){
        return $this->fname;
    }

    
    public function getLname(){
        return $this->lname;
    }

}