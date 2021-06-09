<?php

    class Operation{
        private PDO $db;


            //get all operations
            function getOperation(int $id){
                $query =$this->db->prepare("SELECT * FROM operation WHERE account_id=:id");
                $query->execute([
                    "id" => $id
                ]);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
            // get one operation

            function lastOperation(int $id) {
                $query = $this->db->prepare("SELECT * FROM operation WHERE account_id=:id ORDER BY id DESC LIMIT 1"
                );
                $query->execute([
                    "id" => $id
                ]);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }


            public function __construct(){
                $this->db = new PDO ('mysql:host=localhost;dbname=banque_php', 'root', '');
            }
        
// function addCredit(PDO $db, array $operation):bool{
//     $query= $db->prepare("INSERT INTO operation(operation_date, operation_type, operation_amount,:label, account_id)
//                              VALUES (NOW(), 'virement' , :operation_amount, :account_id)");
//     $result= $query->execute([
//         "operation_amount" => $operation["operation"],
//         "account_id" => $operation["credit_account"]
//     ]);
//     return $result;
// }
    }
?>

