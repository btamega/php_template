<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Learn Everyday, Join online courses today, Train Your Brain Today!, Learn to enjoyevery minute of your life., Online Learning, Innovations in Online Learning, Education and Learning, 01, 02, 03, 04, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Accueil.css" media="screen">
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700|Archivo+Black:400">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
  <style>
      body {margin:0;}

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
      }

      li {
        float: left;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover:not(.active) {
        background-color: #111;
      }

      .active {
        background-color: #04AA6D;
      }
  </style>
  </head>
  <body class="u-body">
  <?php
  include 'composants.php';
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* Pour l'image, il faut spécifier le path dans la variable path sans le nom de l'image.
       */
      $path="images";
      $Navbar = $_POST['navbar']; 
     $Companynom = $_POST['company']; 
     $Companylink = $_POST['link_url']; 
     $CompanyLogo=$_POST['formFile'];
     $Email=$_POST['email'];
     $Phone=$_POST['phone'];
     echo '
     <ul>
      
      <li>
        <a href="#">
            <img src="'.$path.'/'.$CompanyLogo.'" style="padding:0px 64px; width: 200px;" alt="Image not found">
        </a>
      </li>'
      ;
          if(isset($_POST['flexCheckChecked'])){
            if(in_array('yes', $_POST['radio'])){
            if(in_array('Home', $_POST['flexCheckChecked'])){
              echo '<li><a class="active" href="#home">Home</a></li>';
          }if(in_array('About', $_POST['flexCheckChecked'])){
            echo '<li><a href="#about">About</a></li>';
          }
          if(in_array('Contact', $_POST['flexCheckChecked'])){
            echo '<li><a href="#contact">Contact</a></li>';
          }
          if(in_array('Menu', $_POST['flexCheckChecked'])){
            echo '<li><a href="#menu">Menu</a></li>';
          }
          if(in_array('Dropdown', $_POST['flexCheckChecked'])){
            echo '<li><a href="#dropdown">Dropdown</a></li>';
          }
          if(in_array('Help', $_POST['flexCheckChecked'])){
            echo '<li><a href="#help">Help</a></li>';
          }
          if(in_array('Divers', $_POST['flexCheckChecked'])){
            echo '<li><a href="#divers">Divers</a></li>';
          }
          if(in_array('Autres', $_POST['flexCheckChecked'])){
            echo '<li><a href="#autres">Autres</a></li>';
          }
        }else{
          echo '
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>
          ';
        }
          
           
          echo '<li style="float:right;"><a href="'.$Companylink.'">'.$Companynom.'</a></li>';
          
          echo '
            </ul>
            <div style="padding:20px;margin-top:30px;background-color:#89d0ca;height:1500px;">
              <h1>Fixed Top Navigation Bar</h1>';
              if(isset($_POST['flexCheckChecked'])){
              if(in_array('Boutons', $_POST['flexCheckChecked'])){
                $var = "Button" ;
               $ButtonInstance = new $var();
               $Bouton=$ButtonInstance->createComposant("Rechercher",null);
                echo $Bouton;
              }
              if(in_array('Paragraphe', $_POST['flexCheckChecked'])){
                $var = "Paragraphe" ;
               $ParagrapheInstance = new $var();
               $Paragraphe=$ParagrapheInstance->createComposant("Some text some text some text some text..",null);
                echo $Paragraphe;
              }  
              if(in_array('Checkbox', $_POST['flexCheckChecked'])){
                $var = "Checkbox" ;
               $CheckboxInstance = new $var();
               $Checkbox=$CheckboxInstance->createComposant("Your checkbox",null);
                echo $Checkbox;
              }
              if(in_array('Formulaire', $_POST['flexCheckChecked'])){
                $var = "Formulaire" ;
               $FormulaireInstance = new $var();
               $Formulaire=$FormulaireInstance->createComposant("Votre formulaire",null);
                echo $Formulaire;
              }
              if(in_array('RadioButton', $_POST['flexCheckChecked'])){
                $var = "RadioButton" ;
               $RadioButtonInstance = new $var();
               $RadioButton=$RadioButtonInstance->createComposant("Votre RadioButton",null);
                echo $RadioButton;
              }
              if(in_array('Tables', $_POST['flexCheckChecked'])){
                $var = "Tables" ;
               $TablesInstance = new $var();
               $Tables=$TablesInstance->createComposant("Votre Tableau",null);
                echo $Tables;
              }
              if(in_array('Input', $_POST['flexCheckChecked'])){
                $var = "Input" ;
               $InputInstance = new $var();
               $Input=$InputInstance->createComposant("Votre Input",null);
                echo $Input;
              }
            }
              echo'
              <h2>Scroll this page to see the effect</h2>
            
            
            </div>
          <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-266b">
          <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Copyright IRISI 2022</p>
          </div>
        </footer>'; 
        } 
        else{ 
        echo '
        </ul>
            <div style="padding:20px;margin-top:30px;background-color:#89d0ca;height:1500px;">
              <h1>Fixed Top Navigation Bar</h1>
              <h2>Scroll this page to see the effect</h2>
              <h2>The navigation bar will stay at the top of the page while scrolling</h2>

              <p>Some text some text some text some text..</p>
            
            </div>
          <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-266b">
          <div class="u-clearfix u-sheet u-sheet-1">
          <p >'.$Email.'</p>
          <p >'.$Phone.'</p>
            <p class="u-small-text u-text u-text-variant u-text-1">Copyright IRISI 2022</p>
          </div>
        </footer>'; 
  }
}
?>
  </body>
</html>