<?php

    class OperationSModel{
        private PDO $db;


            //get all operations
            function getAllOperations(int $id){
                $query =$this->db->prepare("SELECT * FROM operation WHERE account_id=:id");
                $query->execute([
                    "id" => $id
                ]);
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $key=>$operation){
                    $result[$key] = new Operation($operation);
                }
                return $result;
            }
            // get one operation

            function getLastOperation(int $id) {
                $query = $this->db->prepare("SELECT * FROM operation WHERE account_id=:id ORDER BY id DESC LIMIT 1"
                );
                $query->execute([
                    "id" => $id
                ]);
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $result = new Operation($result);
                return $result;
            }

            public function __construct(){
                $this->db = ConnexionModel::getDB();
            }



        // function debitOperation(int $id, float $amount){
        //     $query = $this->db->prepare(
        //         "UPDATE account 
        //         SET amount=:amount
        //         WHERE id=:id"
        //     );
        //     $query->execute([
        //         "id" => $id,
        //         "amount" => $amount
        //     ]);
        // }
        
        // function creditOperation(int $id, float $amount){
        //     $query = $this->db->prepare(
        //         "UPDATE account 
        //         SET amount=:amount
        //         WHERE id=:id"
        //     );
        //     $query->execute([
        //         "id" => $id,
        //         "amount" => $amount
        //     ]);
        // }

    }
?>

