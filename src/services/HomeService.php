<?php

namespace services;
class HomeService
{
    private \core\Mysql $mysql;
    public function __construct(\core\Mysql $mysql){
        $this->mysql = $mysql;
    }

    public function index($request, $args): array
    {
        $sql="select * from Person";
        $request = $this->mysql->toArray($this->mysql->execute($sql));
        return $request;
    }
}