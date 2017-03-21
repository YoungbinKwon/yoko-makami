<?php

class Customer extends DatabaseManager
{
    function selectAll()
    {
        $query = "SELECT id, name FROM test";
        $query_result = $this->mysql->query($query);
        $result = array();

        while ($row = $query_result->fetch_assoc()) {
            $result[$row['id']] = $row;
        }
        
        return $result;
    }

    function selectById($id)
    {
        if (!isset($id)) {
            return array();
        }
        
        $id = $this->mysql->real_escape_string($id);
        $query = "SELECT id, name FROM test where id = " . $id;
        $query_result = $this->mysql->query($query);
        $result = array();

        while ($row = $query_result->fetch_assoc()) {
            $result[$row['id']] = $row;
        }
        
        return $result;
    }
}
