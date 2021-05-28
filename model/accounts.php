<?php
require "model/userModel.php";

function Account(PDO $db, int $id){
    $query = $db->prepare("SELECT * FROM account WHERE customer_id=:id");
    $query->execute([
    "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getAccount(PDO $db, int $id) {
    $query = $db->prepare(
        "SELECT * FROM account AS a
        LEFT JOIN credit_card AS c
        ON  c.account_id = a.id
        WHERE a.id=:id"
    );
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addAccount(PDO $db, array $account):bool {
    $query= $db->prepare("INSERT INTO account(account_type, create_date,account_number, amount, customer_id) VALUES (:account_type, NOW(), 2424242424, :amount, :customer_id)");
    $result= $query->execute([
        "account_type" => $account["account_type"],
        "amount" => $account["amount"],
        "customer_id" => $_SESSION["user"]["id"]
    ]);
    return $result;
}

?>
