<?php
    $users = [
        [
            "username" => "johndoe",
            "password" => password_hash("password123", PASSWORD_DEFAULT),
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "role" => "user"
        ],
        [
            "username" => "janedoe",
            "password" => password_hash("password456", PASSWORD_DEFAULT),
            "name" => "Jane Doe",
            "email" => "janedoe@example.com",
            "role" => "admin"
        ],
        [
            "username"=> "ngocdiu",
            "password"=> password_hash("ngocdiu123", PASSWORD_DEFAULT),
            "name"=> "Doan Ngoc Diu",
            "email"=> "doanngocdiu3010@gmail.com",
            "role"=> "user"
        ],
        [
            "username"=> "duongdoi",
            "password"=> password_hash("duong0804", PASSWORD_DEFAULT),
            "name"=> "Duong Van Doi",
            "email"=> "doiduong0804@gmail.com",
            "role"=> "user"
        ]
       ];

    $authorization_levels = [
        "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false,
        ],

        "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true,
        ] 
    ];
       
?>