<?php

    class TransactionModel{
        private PDO $db;

        public function transaction(float $amount, float $totalDebit, float $totalCredit, Account $debit_account, Account $credit_account){
            try{
                $this->db->beginTransaction();

                //Debit
                $update =  "UPDATE account SET amount=:amount WHERE  id=:id";
                $stmt = $this->db->prepare($update);
                $stmt->execute([
                    "amount" => $totalDebit,
                    "id" => $debit_account->getId()
                ]); 
                
                //Credit
                $update =  "UPDATE account SET amount=:amount WHERE  id=:id";
                $stmt = $this->db->prepare($update);
                $stmt->execute([
                    "amount" => $totalCredit,
                    "id" => $credit_account->getId()
                ]); 
                
                //Operation Debit
                $insert= "INSERT INTO operation(operation_type, label, operation_date , operation_amount, account_id) 
                VALUES('Virement', :label , NOW(), :operation_amount, :account_id)";
                $stmt = $this->db->prepare($insert);
                $stmt->execute([
                    "label"=> "label test",
                    "operation_amount"=>"-".$amount,
                    "account_id" => $debit_account->getId()
                   
                ]);

                //Operation Credit
                $insert= "INSERT INTO operation(operation_type, label, operation_date , operation_amount, account_id) 
                VALUES('Virement', :label , NOW(), :operation_amount, :account_id)";
                $stmt = $this->db->prepare($insert);
                $stmt->execute([
                    "label"=> "label test",
                    "operation_amount"=> $amount,
                    "account_id" => $credit_account->getId()
                    
                ]);


                $this->db->commit();
            }
            catch(Exception $e){
                echo $e->getMessage();
                $this->db->rollBack();
            }
            return $stmt;
        }

        public function __construct(){
            // l'objet est automatiquement connecté à la BDD
            $this->db = ConnexionModel::getDB();
        }
    }

?>