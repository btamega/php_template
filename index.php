<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>IRISI WEB Template</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.css" rel="stylesheet" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Veuillez choisir vos options pour générer votre site</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="./action.php">
                        <div class="form-row m-b-55">
                            <div class="name">Barre de navigation</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="navbar">
                                            <label class="label--desc">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="link_url">
                                            <label class="label--desc">Lien</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name">Menus de navigation</div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Options</legend>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Home" id="flexCheckCheckedHome" checked="">
                                            <label class="form-check-label" for="flexCheckCheckedHome">
                                                Home
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="About" id="flexCheckAbout">
                                            <label class="form-check-label" for="flexCheckAbout">
                                                About
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Contact" id="flexCheckCheckedContact">
                                            <label class="form-check-label" for="flexCheckCheckedContact">
                                                Contact
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Menu" id="flexCheckMenu">
                                            <label class="form-check-label" for="flexCheckMenu">
                                                Menu
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Dropdown" id="flexCheckCheckedDropdown">
                                            <label class="form-check-label" for="flexCheckCheckedDropdown">
                                                Dropdown
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Help" id="flexCheckHelp">
                                            <label class="form-check-label" for="flexCheckHelp">
                                                Help
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Divers" id="flexCheckCheckedDivers">
                                            <label class="form-check-label" for="flexCheckCheckedDivers">
                                                Divers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Autres" id="flexCheckAutres">
                                            <label class="form-check-label" for="flexCheckAutres">
                                                Autres
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="name">Compagnie</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Logo de la Compagnie</div>
                            <div class="value">
                                <div class="input-group">
                                    <input name="formFile" class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Composants</div>
                            <fieldset class="form-group">
                                <legend class="mt-4">Options</legend>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Paragraphe" id="flexCheckChecked" checked="">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Paragraphe
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Boutons" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Boutons
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Checkbox" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Formulaire" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Formulaire
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="RadioButton" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                RadioButton
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Tables" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Tables
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Input" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Input 
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="flexCheckChecked[]" class="form-check-input" type="checkbox" value="Textarea" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Textarea
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="indicatif">
                                            <label class="label--desc">Indicatif</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Langue</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Séléctionner une langue</option>
                                            <option>Français</option>
                                            <option>Anglais</option>
                                            <option>Arabe</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Menu horizontal ?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Oui
                                    <input type="radio" checked="checked" value="yes" name="radio[]">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Non
                                    <input type="radio" value="no" name="radio[]">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button name="submit" class="btn btn-success" type="submit">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
    
</body>

</html>