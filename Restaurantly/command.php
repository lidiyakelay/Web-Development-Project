<?php

if(isset($_POST['ping'])){
    $ip = $_POST["ip"];
    var_dump($ip);
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $output=shell_exec("ping {$ip}");
        echo $output;
    }
    else{
        echo 'input valid ip address';
    }
}
elseif(isset($_POST['tracert'])) {
    $ip = $_POST["ip"];
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $output= shell_exec("tracert -d {$ip}");
        echo $output;
    }
    else{
        echo 'input valid ip address';
    }
} 
elseif(isset($_POST['ipconfig'])) {
    $output= shell_exec("ipconfig");
        echo $output;

} 
else {
    echo 'not working';
    
}


?>