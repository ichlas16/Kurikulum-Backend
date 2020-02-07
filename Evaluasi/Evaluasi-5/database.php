<?php
class Database{
protected   $host = 'localhost',
            $uname = 'ichlas',
            $pass = '12345',
            $db = 'db_santri';

    function __construct(){
        $this->connect = new PDO("mysql:host=$this->database;dbname=santri", $this->user, $this->password);
    }

    function edit($id){
        $query = "SELECT * FROM santri WHERE id='$id'";
        $edit = $this->connect->prepare($query);
        $edit->execute();
        while($d = $edit->fetchAll(pdo::FETCH_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function create($nama,$umur,$asal){
        $query = "INSERT INTO santri VALUES ('$nama','$umur','$asal')";
        $create = $this->Database->prepare($query);
        $create->execute();
    }

    function read(){
        $query = "SELECT * FROM santri";
        $show = $this->connect->prepare($query);
        $show->execute();
        $hasil[] = $show->fetchALL(pdo::FETCH_ASSOC);
        return $hasil;
    }

    function update($id,$nama,$umur,$asal){
        $query = "UPDATE santri SET nama='$nama', umur='$umur', asal='$asal' WHERE id='$id'";
        $update = $this->Database->prepare($query);
        $update->execute();
    }

    function delete($id){
        $query = "DELETE FROM santri WHERE id='$id'";
        $delete = $this->Database->prepare($query);
        $delete->execute();
    }
}

?>