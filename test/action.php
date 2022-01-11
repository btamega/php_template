<?php
 include 'composants.php';
 include 'header.php';
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = "template";
 $conn = new mysqli($servername, $username, $password,$dbname);
 //On établit la connexion
 
 //On vérifie la connexion
 if(!$conn){
     die('Erreur : ' .mysqli_connect_error());
 }
 
/**/ $os = array("Button", "Input","textarea","p");
 foreach($_POST as $key => $value)
 {      if(substr($key,0,4)==="name" ){
 
 
           $var = "NavItem" ;
           $titi = new $var();
           $number =substr($key,4,1);
           $toto=$titi->createComposant($_POST[$key],$_POST["valuelink".$number]);
        $str1=$_POST[$key];
        $str2=$_POST["valuelink".$number];
        $sql = "INSERT INTO  `navbar` ( `link`, `valuelink`)
        VALUES ('$str1','$str2')";
        
        if (!$conn->query($sql) === TRUE) {
     
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        

         }
     
 }
echo  "</nav>";
 foreach($_POST as $key => $value)
{     
          //  var_dump($value);
     if (in_array($value, $os)) { 
                $var = $value ;
            $titi = new $var();
            $toto=$titi->createComposant($_POST[$value.'_text']);
           
              $str3=$_POST[$value.'_text'];
             $sql = "INSERT INTO  `composant` ( `type`, `valuetype`)
            VALUES ('$value','$str3')";
            
            if (!$conn->query($sql) === TRUE) {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
     }
}
?>