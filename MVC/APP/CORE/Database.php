<?php

class Database
{
    private function connect()
    {
        $string ="mysql:host=localhost;dbname=mvcbsis3f_db";
        $con = new PDD($string, 'root','');
        return $con;
    }
}

public function query($query, $data = [])
{
    $con = $this ->connect();
    $stm = $con->prepare($query);

<<<<<<< HEAD
    $check =$stm->execute($data);
=======
    $check =$stm->execute($data); 
>>>>>>> Santiagojoane

    if ($check)
    $result = $stm->fetchAll(PDD::FETCH_OBJ);

    if (is-arry($result) && count($result) > 0)
    {
        retur $result;
    }

}