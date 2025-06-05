<?php 

require_once("../config.php");

if(count($_GET) == 2){ // [filter, apiKey]
    $filterBy = array_keys($_GET)[0];

    if(checkAPIKey($_GET[array_keys($_GET)[1]])){ //apiKey
        if(in_array($filterBy, FILTER_BY)){
            $filterValue = clean($_GET[$filterBy]);
            
            $stmt = $conn->prepare(sprintf("SELECT * FROM `brainrot` WHERE `%s` LIKE ?", $filterBy));
            $stmt->bind_param("s", sprintf("%s%%", $filterValue));
            $stmt->execute();
            $result = $stmt->get_result();

            
            $payload = ["success" => true, "brainrots" => []];
            while($row = $result->fetch_assoc()){
                array_push($payload["brainrots"], $row);
            }
            
            if(count($payload["brainrots"]) == 0){
                $payload["success"] = false;
                $payload["error"] = "No Results";
            }


            echo json_encode($payload);

        }

        else{
            echo returnError("Filter NOT Valid");
        }   
    }

    else{
        echo returnError("Missing Authentication");
    }
}

else{
    echo returnError("Missing Parameters");
}


?>