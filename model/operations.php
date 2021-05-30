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
    $query = $db->prepare(
        "SELECT * FROM operation WHERE account_id=:id ORDER BY id DESC LIMIT 1"
    );
    $query->execute([
        "id" => $id
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addOperation(PDO $db, $id1, $id2){
    
}
?>

