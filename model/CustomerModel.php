<?php 
    

    class CustomerModel{
        private PDO $db;


        function getCustomerByEmail(array $data){
            $query= $this->db->prepare("SELECT * FROM customer WHERE mail=:email");    
            $query->execute([
                "email"=> $data["email"]
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $result= new Customer($result);
            return $result;
        }   
        

        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;dbname=banque_php', 'root', '');
        }
    }
        
?>