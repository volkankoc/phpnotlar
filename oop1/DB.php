<?php 

class DB{
  
    private $host ="localhost";
    private $username="root";
    private $password="root";
    private $database="oop";
    public  $db;

    public function __construct() {

        try{
            $this->db=new PDO("mysql:host=$this->host;dbname=$this->database;charset=utf8",$this->username,$this->password);
        }
        
        catch (PDOException $err) {
            echo $err->getMessage();
        }
    }


    public function ekle($ad,$soyad)
    {
        $sorgu=$this->db->prepare("INSERT INTO users set ad=:ad,soyad=:soyad");
        $sorgu->bindValue(":ad",$ad);
        $sorgu->bindValue(":soyad",$soyad);

        $sorgu->execute();
    }
}
?>