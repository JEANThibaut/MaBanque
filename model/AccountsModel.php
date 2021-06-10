<?php 


    class AccountModel{
        private PDO $db;

        function getAllAccount(int $id){
            $query = $this->db->prepare("SELECT * FROM account WHERE customer_id=:id");
            $query->execute([
                "id" => $id
            ]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $key=>$account){
                $result[$key] = new Account($account);
            }
            return $result;
        }
        
        function getSingleAccount(int $id){
            $query=$this->db->prepare("SELECT * FROM account WHERE id=:id");
            $query->execute([
                "id"=> $id
            ]);
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $result = new Account($result);
            return $result;
        }
        
        // query for add a new account in database
        public function addAccount(Account $account):bool {
            $query= $this->db->prepare("INSERT INTO account(account_type, create_date,account_number, amount, uncover_permission, customer_id)
                                     VALUES (:account_type, NOW(), 2424242424, :amount, :uncover_permission, :customer_id)");
            $result= $query->execute([
                "account_type" => $account->getAccount_type(),
                "amount" => $account->getAmount(),
                "uncover_permission"=>$account->getUncover_permission(),
                "customer_id" => $_SESSION["user"]->getId()
            ]);
            return $result;
        }
        
        // function debitOperation($id){
        //     $query = $this->db->prepare(
        //         "UPDATE account 
        //         SET amount=:amount
        //         WHERE id=:id"
        //     );
        //     $query->execute([
        //         "id" => $id,
        //         "amount" => "amount"-$id["operation"]
        //     ]);
        // }
        
        // function creditOperation($id){
        //     $query = $this->db->prepare(
        //         "UPDATE account 
        //         SET amount=:amount
        //         WHERE id=:id"
        //     );
        //     $query->execute([
        //         "id" => $id,
        //         "amount" => "amount"+$id["operation"]
        //     ]);
        // }

        public function __construct(){
            $this->db = ConnexionModel::getDB();
        }
    //     public function __construct(){
    //         $this->db = new PDO ('mysql:host=localhost;dbname=banque_php', 'root', '');
    //     }
    }
        
?>