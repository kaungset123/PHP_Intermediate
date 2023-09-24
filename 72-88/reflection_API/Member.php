<?php



class Member{

    private $isAuth = false;
    private $detailInfo =[
        "name"=>"Thoumas",
        "age"=>20,
        "school"=>"London"
    ];

    public function setAuth($bol){
        $this->isAuth=$bol;
    }

    public function getAuth(){
        return $this->isAuth;
    }

    public function getDetailInfo($detailInfo,int $hehe){

        return $this->detailInfo;
    }

    public function getInfo($argu){
        return $argu;
    }
}

