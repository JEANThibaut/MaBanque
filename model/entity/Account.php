<?php

 class Account{

    protected int $id;
    protected string $account_type;
    protected int $account_number;
    protected int $amount;
    protected ?int $uncover_permission;
    protected int $customer_id;


    public function __construct($data) {
        if($data){
            //Hydrateur auto, permet de ne pas appeler les setter à la main
            foreach($data as $key=>$value){
                $setter = "set" . ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter($value);
                }
            }
        }    
    }

    public function setId(int $id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }


    public function setAccount_type(string $account_type){
        $this->account_type=$account_type;
    }
    public function getAccount_type(){
        return $this->account_type;
    }


    public function setAccount_number(string $account_number){
        $this->account_number=$account_number;
    }
    public function getAccount_number(){
        return $this->account_number;
    }


    public function setAmount(int $amount){
        $this->amount=$amount;
    }
    public function getAmount(){
        return $this->amount;
    }


    public function setUncover_permission(?int $uncover_permission){
        $this->uncover_permission=$uncover_permission;
    }
    public function getUncover_permission(){
        return $this->uncover_permission;
    }

    public function setCustomer_id(int $customer_id){
        $this->customer_id=$customer_id;
    }
    public function getCustomer_id(){
        return $this->customer_id;
    }


 }

?>