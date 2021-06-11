<?php

    class Customer{
        protected int $id;
        protected string $customer_name;
        protected string $customer_lastname;
        protected string $birth_date;
        protected int $street_number;
        protected string $street;
        protected int $postal_code;
        protected string $city;
        protected int $phone;
        protected string $mail;
        protected string $customer_password;

        public function __construct(?array $data=null) {
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
            return htmlspecialchars($this->id);
        }


        public function setCustomer_name(string $customer_name){
            $this->customer_name=$customer_name;
        }
        public function getCustomer_name(){
            return htmlspecialchars($this->customer_name);
        }

        
        public function setCustomer_lastname(string $customer_lastname){
            $this->customer_lastname=$customer_lastname;
        }
        public function getCustomer_lastname(){
            return htmlspecialchars($this->customer_lastname);
        }


        public function setBirth_date(string $birth_date){
            $this->birth_date=$birth_date;
        }

        public function getBirth_date(){
            return htmlspecialchars($this->birth_date);
        }


        public function setStreet_number(int $street_number){
            $this->street_number=$street_number;
        }
        public function getStreet_number(){
            return htmlspecialchars($this->street_number);
        }

        public function setStreet(string $street){
            $this->street=$street;
        }
        public function getStreet(){
            return htmlspecialchars($this->street);
        }


        public function setPostal_code(int $postal_code){
            $this->postal_code=$postal_code;
        }
        public function getPostal_code(){
            return htmlspecialchars($this->postal_code);
        }


        public function setCity(string $city){
            $this->city=$city;
        }
        public function getCity(){
            return htmlspecialchars($this->city);
        }


        public function setPhone(int $phone){
            $this->phone=$phone;
        }
        public function getPhone(){
            return htmlspecialchars($this->phone);
        }

        
        public function setMail(string $mail){
            $this->mail=$mail;
        }
        public function getMail(){
            return htmlspecialchars($this->mail);
        }

        public function setCustomer_password(string $customer_password){
            $this->customer_password=$customer_password;
        }

        public function getCustomer_password(){
            return htmlspecialchars($this->customer_password);
        }


    }   

?>