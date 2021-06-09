<?php 


    class CreditCardModel{
        
        private PDO $db;

        public function getCreditCard(int $id){
            $query=$this->db->prepare("SELECT*FROM credit_card WHERE account_id=:id");
            $query->execute([
                "id" => $id
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            var_dump($result);
            // $result= new CreditCard($result);
            // return $result;
            if(!$result){
                return false;
            }
            else{
            $result= new CreditCard($result);
            return $result;
            }
        }

        

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;dbname=banque_php', 'root', '');
        }



    }
?>