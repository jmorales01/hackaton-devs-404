<?php

namespace services;
class ChatService
{
    private \core\Mysql $mysql;
    public function __construct(\core\Mysql $mysql){
        $this->mysql = $mysql;
    }

    public function index($request, $args): array
    {
        $sql="select * from chat";
        $request = $this->mysql->toArray($this->mysql->execute($sql));
        return json_decode(json_encode($request), true);
    }
}