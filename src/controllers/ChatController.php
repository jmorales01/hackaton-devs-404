<?php

namespace controllers;
require __DIR__ . '/../services/ChatService.php';

class ChatController
{
    private \core\Mysql $mysql;
    public function __construct(\core\Mysql $mysql){
        $this->mysql = $mysql;
    }

    public function index($request, $args)
    {
        $data = (new \services\ChatService($this->mysql))->index($request, $args);
        require __DIR__ . '/../views/chat/index.php';
    }
}