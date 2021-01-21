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

    //Kayıt ekleme fonksiyonu
    public function ekle($ad,$soyad)
    {
        $sorgu=$this->db->prepare("INSERT INTO users set ad=:ad,soyad=:soyad");
        $sorgu->bindValue(":ad",$ad);
        $sorgu->bindValue(":soyad",$soyad);
        $sorgu->execute();
        echo $sorgu->rowCount()>0 ? "Kayıt Başarılı" : "Hata oluştu";
    }

    //id ye göre kayıt silme işlemi
    public function sil($id)
    {
        $sorgu=$this->db->prepare("DELETE FROM users where id=:id");
        $sorgu->bindValue("id",$id);
        $sorgu->execute();
        echo $sorgu->rowCount()>0 ? "Kayıt Silindi" : "Kayıt SİLİNEMEDİ";
    }
    
    public function idKayitGetir($ad)
    {
        $sorgu=$this->db->prepare("SELECT * FROM users where ad=:ad");
        $sorgu->bindValue("ad",$ad);
        $sorgu->execute();
        echo $sorgu->rowCount()>0 ? "Bir Kayıt Bulundu" : "Kayıt Bulunamadı";
        echo "<br>";
        $satir=$sorgu->fetch(PDO::FETCH_ASSOC);
        echo $satir["ad"]. " " . $satir["soyad"];
    }

    public function tumKayitlariGetir()
    {
        $sorgu=$this->db->query("SELECT * FROM users",PDO::FETCH_ASSOC);  
        foreach ($sorgu as  $satir) {
            echo $satir["id"]."-".$satir["ad"]. " " . $satir["soyad"]."<br>";
        }
    }
}
?>