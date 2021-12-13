<?php
 include 'interface.php';
$work= array( );
$text="";
class Button implements Template{
    public function createComposant($name,$text=null){
 
        $str="<button>"
        .$name.
        "</button>";
    //   array_push($work,$str);
   
         echo $str ."<br>";
    }


}
class NavItem  implements Template{
    public function createComposant($name,$link){
        $str="<a class='navbar-brand' href=".$link.">".$name."</a>
        ";
       // $str="<input type='text'  class='form-control' placeholder=" .$name.">";
    
    
       echo $str ."<br>";

    }
}
class Input implements Template{
    public function createComposant($name,$text=null){
        $str="<input type='text'  class='form-control' placeholder=" .$name.">";
      echo $str ."<br>";
    }
}
class textarea implements Template{
    public function createComposant($name,$text=null){
        $str="<textarea rows=".$name." cols='50'>
        </textarea>";
       echo $str ."<br>";
    }
}
class p implements Template{
    public function createComposant($name,$text=null){
        $str="<p >".$name."
        </p>";
      echo $str ."<br>";
    }
}

?>