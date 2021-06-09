<?php 


    class CreditCard{

        protected int $id;
        protected int $account_id;
        protected int $card_number;
        protected int $crypto;
        protected string $card_type;
        protected int $payement_perm;
        protected int $debit_perm;
        protected string $without_contact;
        protected int $code;


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
        return $this->id;
        }


        public function setAccount_id(int $account_id){
            $this->account_id=$account_id;
        }
        public function getAccount_id(){
            return $this->account_id;
        }


        public function setCard_number(int $card_number){
            $this->card_number=$card_number;
        } 
        public function getCard_number(){
            return $this->card_number;
        }


        public function setCrypto(int $crypto){
            $this->crypto=$crypto;
        }
        public function getCrypto(){
            return $this->crypto;
        }


        public function setCard_type(string $card_type){
            $this->card_type=$card_type;
        }
        public function getCard_type(){
            return $this->card_type;
        }


        public function setPayement_perm(int $payement_perm){
            $this->payement_perm=$payement_perm;
        }
        public function getPayement_perm(){
            return $this->payement_perm;
        }


        public function setDebit_perm(int $debit_perm){
            $this->debit_perm=$debit_perm;
        }
        public function getDebit_perm(){
            return $this->debit_perm;
        }


        public function setWithout_contact(string $without_contact){
            $this->without_contact=$without_contact;
        }
        public function getWithout_contact(){
            $this->without_contact;
        }


        public function setCode(int $code){
            $this->code=$code;
        }
        public function getCode(){
            return $this->code;
        }

    }

?>