<?php
 include 'interface.php';
$work= array( );
$text="";
class Button implements Template{
    public function createComposant($name,$text=null){
 
        $str="<button type='button' class='btn btn-secondary'>"
        .$name.
        "</button>";
         echo $str ."<br>";
    }


}
class RadioButton implements Template{
    public function createComposant($name,$text=null){
 
        $str="<fieldset class='form-group'>
        <legend class='mt-4'>$name</legend>
        <div class='form-check'>
          <label class='form-check-label'>
            <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios1' value='option1' checked=''>
            Option one is this and that—be sure to include why it's great
          </label>
        </div>
        <div class='form-check'>
          <label class='form-check-label'>
            <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios2' value='option2'>
            Option two can be something else and selecting it will deselect option one
          </label>
        </div>
        <div class='form-check disabled'>
          <label class='form-check-label'>
            <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios3' value='option3' disabled=''>
            Option three is disabled
          </label>
        </div>
      </fieldset>";
         echo $str ."<br>";
    }


}
class Dropdown implements Template{
    public function createComposant($name,$text=null){
        
        $str="<div class='btn-group' role='group' aria-label='Button group with nested dropdown'>
        <button type='button' class='btn btn-success'>.$name</button>
        <div class='btn-group' role='group'>
          <button id='btnGroupDrop2' type='button' class='btn btn-success dropdown-toggle' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></button>
          <div class='dropdown-menu' aria-labelledby='btnGroupDrop2' style=''>
            <a class='dropdown-item' href='#'>Dropdown link</a>
            <a class='dropdown-item' href='#'>Dropdown link</a>
          </div>
        </div>
      </div>";
         echo $str ."<br>";
    }


}
class Formulaire implements Template{
    public function createComposant($name,$text=null){
 
        $str="<form>
            <fieldset>
                <legend>Legend</legend>
                <div class='form-group row'>
                    <label for='staticEmail' class='col-sm-2 col-form-label'>Email</label>
                    <div class='col-sm-10'>
                    <input type='text' readonly='' class='form-control-plaintext' id='staticEmail' value='email@example.com'>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='exampleInputEmail1' class='form-label mt-4'>Email address</label>
                    <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>
                    <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
                </div>
                <div class='form-group'>
                    <label for='exampleInputPassword1' class='form-label mt-4'>Password</label>
                    <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password'>
                </div>
                <div class='form-group'>
                    <label for='exampleSelect1' class='form-label mt-4'>Example select</label>
                    <select class='form-select' id='exampleSelect1'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='exampleSelect2' class='form-label mt-4'>Example multiple select</label>
                    <select multiple='' class='form-select' id='exampleSelect2'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='exampleTextarea' class='form-label mt-4'>Example textarea</label>
                    <textarea class='form-control' id='exampleTextarea' rows='3'></textarea>
                </div>
                <div class='form-group'>
                    <label for='formFile' class='form-label mt-4'>Default file input example</label>
                    <input class='form-control' type='file' id='formFile'>
                </div>
                <fieldset class='form-group'>
                    <legend class='mt-4'>Radio buttons</legend>
                    <div class='form-check'>
                    <label class='form-check-label'>
                        <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios1' value='option1' checked=''>
                        Option one is this and that—be sure to include why it's great
                    </label>
                    </div>
                    <div class='form-check'>
                    <label class='form-check-label'>
                        <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios2' value='option2'>
                        Option two can be something else and selecting it will deselect option one
                    </label>
                    </div>
                    <div class='form-check disabled'>
                    <label class='form-check-label'>
                        <input type='radio' class='form-check-input' name='optionsRadios' id='optionsRadios3' value='option3' disabled=''>
                        Option three is disabled
                    </label>
                    </div>
                </fieldset>
                <fieldset class='form-group'>
                    <legend class='mt-4'>Checkboxes</legend>
                    <div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
                    <label class='form-check-label' for='flexCheckDefault'>
                        Default checkbox
                    </label>
                    </div>
                    <div class='form-check'>
                    <input class='form-check-input' type='checkbox' value='' id='flexCheckChecked' checked=''>
                    <label class='form-check-label' for='flexCheckChecked'>
                        Checked checkbox
                    </label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class='mt-4'>Switches</legend>
                    <div class='form-check form-switch'>
                    <input class='form-check-input' type='checkbox' id='flexSwitchCheckDefault'>
                    <label class='form-check-label' for='flexSwitchCheckDefault'>Default switch checkbox input</label>
                    </div>
                    <div class='form-check form-switch'>
                    <input class='form-check-input' type='checkbox' id='flexSwitchCheckChecked' checked=''>
                    <label class='form-check-label' for='flexSwitchCheckChecked'>Checked switch checkbox input</label>
                    </div>
                </fieldset>
                <fieldset class='form-group'>
                    <legend class='mt-4'>Ranges</legend>
                    <label for='customRange1' class='form-label'>Example range</label>
                    <input type='range' class='form-range' id='customRange1'>
                    <label for='disabledRange' class='form-label'>Disabled range</label>
                    <input type='range' class='form-range' id='disabledRange' disabled=''>
                    <label for='customRange3' class='form-label'>Example range</label>
                    <input type='range' class='form-range' min='0' max='5' step='0.5' id='customRange3'>
                </fieldset>
                <button type='submit' class='btn btn-primary'>Submit</button>
                </fieldset>
            </form>";
         echo $str ."<br>";
    }


}
class CheckBox implements Template{
    public function createComposant($name,$text=null){
        $str="<div class='form-check'>
        <input class='form-check-input' type='checkbox' value='' checked=''>
        <label class='form-check-label' for 'flexCheckChecked'>.$name. </label>
        </div>";
         echo $str ."<br>";
    }


}
class NavItem  implements Template{
    public function createComposant($name,$link){
        $str="<a class='navbar-brand' href=".$link.">".$name."</a>
        ";
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
class Paragraphe implements Template{
    public function createComposant($name,$text=null){
        $str="<p >".$name."
        </p>";
      echo $str ."<br>";
    }
}
class Tables implements Template{
    public function createComposant($name,$text=null){
        $str="<table class='table table-hover'>
        <thead>
          <tr>
            <th scope='col'>Type</th>
            <th scope='col'>Column heading</th>
            <th scope='col'>Column heading</th>
            <th scope='col'>Column heading</th>
          </tr>
        </thead>
        <tbody>
          <tr class='table-active'>
            <th scope='row'>Active</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr>
            <th scope='row'>Default</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-primary'>
            <th scope='row'>Primary</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-secondary'>
            <th scope='row'>Secondary</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-success'>
            <th scope='row'>Success</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-danger'>
            <th scope='row'>Danger</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-warning'>
            <th scope='row'>Warning</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-info'>
            <th scope='row'>Info</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-light'>
            <th scope='row'>Light</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
          <tr class='table-dark'>
            <th scope='row'>Dark</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
          </tr>
        </tbody>
      </table>";
      echo $str ."<br>";
    }
}

?>