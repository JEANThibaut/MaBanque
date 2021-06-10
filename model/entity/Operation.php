<?php 


    class Operation {

        protected int $id;
        protected string $operation_date;
        protected string $operation_type;
        protected float $operation_amount;
        protected string $label;
        protected int $account_id;


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

        public function setOperation_date(string $operation_date){
            $this->operation_date=$operation_date;
        }
        public function getOperation_date(){
            return $this->operation_date;
        }


        public function setOperation_type(string $operation_type){
            $this->operation_type=$operation_type;
        }
        public function getOperation_type(){
            return $this->operation_type;
        }


        public function setOperation_amount(float $operation_amount){
            $this->operation_amount=$operation_amount;
        }
        public function getOperation_amount(){
            return $this->operation_amount;
        }


        public function setLabel(string $label){
            $this->label=$label;
        }
        public function getLabel(){
            return $this->label;
        }


        public function setAccount_id(string $account_id){
            $this->account_id=$account_id;
        }
        public function getAccount_id(){
            return $this->account_id;
        }


    }

?>