<?php 
    // $users = ["pierre" , "sherif" , "Mohand"];
    // for($i = 0 ; $i< count($users); $i++){
    //     echo $users[$i] . '<br>'; 
    // } 

    $users = [ 
        [
            'username' => "Pierre" ,
            'email' => 'pierre@info.com' ,
            'password' => "1234"
        ],
        [
            'username' => "Mohand" ,
            'email' => 'Mohand@info.com' ,
            'password' => "1234"
        ],
        [
            'username' => "Farah" ,
            'email' => 'farah@info.com' ,
            'password' => "1234"
        ],

        
    ];

    foreach($users as $user){
        echo $user['username'] . "<br>";
        echo $user['password'] . "<br>";
    
    }
