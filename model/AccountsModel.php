<?php 

    class AccountModel{
        private PDO $db;

        function Account(int $id){
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
        
        //query for all accounts and credit card
        function getAccount(int $id,int $customer_id) {
            $query = $this->db->prepare(
                "SELECT * FROM account AS a
                LEFT JOIN credit_card AS c
                ON  c.account_id = a.id
                WHERE a.id=:id AND customer_id=:customer_id"
            );
            $query->execute([
                "id" => $id,
                "customer_id"=>$customer_id
            ]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        
        //query for add a new account in database
        function addAccount(array $account):bool {
            $query= $this->db->prepare("INSERT INTO account(account_type, create_date,account_number, amount, customer_id)
                                     VALUES (:account_type, NOW(), 2424242424, :amount, :customer_id)");
            $result= $query->execute([
                "account_type" => $account["account_type"],
                "amount" => $account["amount"],
                "customer_id" => $_SESSION["user"]["id"]
            ]);
            return $result;
        }
        
        function debitOperation($id){
            $query = $this->db->prepare(
                "UPDATE account 
                SET amount=:amount
                WHERE id=:id"
            );
            $query->execute([
                "id" => $id,
                "amount" => "amount"-$id["operation"]
            ]);
        }
        
        function creditOperation($id){
            $query = $this->db->prepare(
                "UPDATE account 
                SET amount=:amount
                WHERE id=:id"
            );
            $query->execute([
                "id" => $id,
                "amount" => "amount"+$id["operation"]
            ]);
        }


        public function __construct(){
            $this->db = new PDO ('mysql:host=localhost;dbname=banque_php', 'root', '');
        }
    }
        
?>