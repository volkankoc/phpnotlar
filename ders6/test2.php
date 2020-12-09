<?php 

 $user=md5($_POST['user']);
 $password= md5($_POST['password']);

 if ($user=="21232f297a57a5a743894a0e4a801fc3" && $password=="827ccb0eea8a706c4c34a16891f84e7b")
    echo "giriş başarılı";
else
    echo "kullanıcı adı yada şifre hatalı";


?>