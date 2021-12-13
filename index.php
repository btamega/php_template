<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container"> 
<form method="post" action="./action.php">

<nav id="GFG_DOWN"  class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button type="button" onClick="GFG_Fun()" >
            click here
        </button>
</nav>
<script>
 
  var index=0;
            var down = document.getElementById("GFG_DOWN");
            function GFG_Fun() {
             //    e.preventdefault()
                // Create a form synamically
             /*var form = document.createElement("input");
                form.setAttribute("method", "post");
                form.setAttribute("action", "submit.php");*/   
  
                // Create an input element for 
                index=index+1;
                var ID = document.createElement("input");
                ID.setAttribute("type", "text");
                ID.setAttribute("name", "name"+(index));
                ID.setAttribute("placeholder", "name");
  
                // Create an input element for password
                var PWD = document.createElement("input");
                PWD.setAttribute("type", "text");
                PWD.setAttribute("name", "valuelink"+(index));
                PWD.setAttribute("placeholder", "link");
  
                /* Create a submit button
                var s = document.createElement("input");
                s.setAttribute("type", "submit");
                s.setAttribute("value", "Submit");*/
  
                // Append the email_ID input to the form
                down.append(ID); 
                
                // Append the password to the form
                down.append(PWD); 
                
                // Append the button to the form
             //   form.append(s); 
  
              //  document.getElementsByTagName("body")[0]
               //.appendChild(form);
            }
        </script>
<h1>les composants</h1>
 <ul>
 <div class="form-group">
   <li>
     
  <input type="checkbox"  class="form-control" id="btn1" name="btn1" value="Button"  >
  <label for="btn1"> button</label><br>  
  <input type="text"  class="form-control" placeholder="Entrez un titre pour votre button" name="Button_text"> 
  </li>
 </div> 

 <div class="form-group"> 

  <li>
  <input  class="form-control" type="checkbox" id="input1" name="input1" value="Input"  >
  <label for="input1"> input</label><br>  
  <input type="text"  class="form-control" placeholder="Entrez un placeholder pour votre Input" name="Input_text"> 
  </li>
  </div> 
  <div class="form-group"> 
   <li>
  <input type="checkbox" class="form-control" id="textarea1" name="textarea1" value="textarea"  >
  <label for="textarea1"> textarea</label><br>  
  <input type="number"  class="form-control" name="textarea_text"> 

  </li>
  </div> 
  </div> 
  <div class="form-group"> 

  <li>
  <input type="checkbox" id="p1" name="p1" value="p"  >
  <label for="p1"> paragraph</label><br>  
  <textarea  name="p_text" rows="4" cols="50">
  </textarea>

  </li>
  </div> 
  <div class="form-group"> 

   <li><button type="submit" name="valider">Envoyer</button></li>
   </div> 
 </ul>
</form>


</body>
</html>