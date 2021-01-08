<?php

    main();

    function main(){
        $number             = $_POST['number'];
        $dividers           = [3,5];
        $result             = calculate($number, $dividers);
        session_start();
        $_SESSION["result"] = strval($result);
        header('Location: index.php');
    }

    function calculate($number, $dividers){
        if(!validator($number)){
            return $result = 'Inserted data is invalid';
        }
        $result = 0;
        for($i = 1; $i < $number; $i++){
            foreach($dividers as $divider){
                if($i % $divider == 0){
                    $result += $i;
                }
            }
        }
        return $result;
    }

    function validator($number){
        if(is_numeric($number) && !is_float($number)){
            return true;
        }
    }
    
?>