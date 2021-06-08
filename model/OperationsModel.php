<?php
//get all operations
function Operation(PDO $db, int $id){
    $query = $db->prepare("SELECT * FROM operation WHERE account_id=:id");
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// get one operation

function lastOperation(PDO $db, $id) {
    $query = $db->prepare("SELECT * FROM operation WHERE account_id=:id ORDER BY id DESC LIMIT 1"
    );
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addCredit(PDO $db, array $operation):bool{
    $query= $db->prepare("INSERT INTO operation(operation_date, operation_type, operation_amount,:label, account_id)
                             VALUES (NOW(), 'virement' , :operation_amount, :account_id)");
    $result= $query->execute([
        "operation_amount" => $operation["operation"],
        "account_id" => $operation["credit_account"]
    ]);
    return $result;
}

?>

