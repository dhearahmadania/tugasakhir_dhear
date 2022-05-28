<html leng="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STUDENT EXCHANGE FORM</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
     
    <body>
        <header>
            <h2 class="text-center">
            Welcome to Student Exchange Form!
            </h2>
        </header>

            <div class="wrapper">
                <div class="container bg-white">
                    <h2 class="container-header text-center">Fill out the form HONESTLY and CAREFULLY, good luck!</h2>
                    <form class="form" action="hasil.php" method="post" id="form">
                        <div class="form-group form-book">
                            <label for="name">1. Full Name</label>
                            <input type="text" id="title" name="name" required>
                        </div>
                        <div class="form-group form-book">
                            <label for="place">2. Place and Date of Birth</label>
                            <table>
                            <tr>
                                <td>
                                    <?php
                                    $island = array(
                                    'Jawa'=>'Jawa',
                                    'Kalimantan'=>'Kalimantan',
                                    'Sumatera'=>'Sumatera',
                                    'Sulawesi'=>'Sulawesi',
                                    'Papua'=>'Papua',
                                  );

                                   ?>

                            <select name="island" id="island">
                                <option value="" selected="selected">Please Choose</option>
                                <?php
                                 foreach($island as $key => $val){
                                     $selected = ($val == 'Jawa') ? 'selected="selected"' : '';
                                      echo '<option value="'. $val .'" ' . $selected . ' >'. $key .'</option>';
                                 }
                               ?>
                               </select>
                                </td>
                                <td>
                                    <select input type = number required="number" name="Date">
                                        <option value="01"> 01</option>
                                        <option value="02"> 02</option><option value="03"> 03</option>
                                        <option value="04"> 04</option><option value="05"> 05</option>
                                        <option value="06"> 06</option><option value="07"> 07</option>
                                        <option value="08"> 08</option><option value="09"> 09</option>
                                        <option value="10"> 10</option><option value="11"> 11</option>
                                        <option value="12"> 12</option><option value="13"> 13</option>
                                        <option value="14"> 14</option><option value="15"> 15</option>
                                        <option value="16"> 16</option><option value="17"> 17</option>
                                        <option value="18"> 18</option><option value="19"> 19</option>
                                        <option value="20"> 20</option><option value="21"> 21</option>
                                        <option value="22"> 22</option><option value="23"> 23</option>
                                        <option value="24"> 24</option><option value="25"> 25</option>
                                        <option value="26"> 26</option><option value="27"> 27</option>
                                        <option value="28"> 28</option><option value="29"> 29</option>
                                        <option value="30"> 30</option><option value="31"> 31</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Month">
                                        <option value="January"> Januari</option><option value="February"> Februari</option>
                                        <option value="March"> March</option><option value="April"> April </option>
                                        <option value="May"> May</option><option value="June"> June</option>
                                        <option value="July"> July</option><option value="August"> August</option>
                                        <option value="September"> September</option><option value="October"> October</option>
                                        <option value="November"> November</option><option value="December"> December</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="Year">
                                        <option value="2005"> 2005</option><option value="2004"> 2004</option>
                                        <option value="2003"> 2003</option><option value="2002"> 2002</option>
                                        <option value="2001"> 2001</option><option value="2000"> 2000</option>
                                        <option value="1999"> 1999</option><option value="1998"> 1998</option>
                                        <option value="1997"> 1997</option><option value="1996"> 1996</option>
                                        <option value="1995"> 1995</option><option value="1994"> 1994</option>
                                    </select>
                                </td>
                            </tr>
                            </table>
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="address">3. Address</label>
                            <input type="text" id="title" name="address" required>                
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="religion">4. Religion</label>
                            <select class="form-select" aria-label="Default select example" name="religion" id="religion">
                                <option value="Islam"> Islam</option>
                                <option value="Christian"> Christian</option>
                                <option value="Catholic"> Catholic</option>
                                <option value="Hindu"> Hindu</option>
                                <option value="Buddha"> Buddha</option>
                                <option value="Other"> Other</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="jk">5. Gender</label>
                            <select class="form-select" aria-label="Default select example" name="jk" id="jk">
                                <option selected>Select Gender</option>
                                <option value="Male"> Male</option>
                                <option value="Female"> Female</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="university">6. University Origin</label>
                            <input type="text" id="title" name="university" required>
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="sn">7. Student Number</label>
                            <input type="number" id="title" name="sn" required>
                        </div>
                        <br>
                        <div class="form-group form-book">
                            <label for="sm">8. Semester</label>
                            <div class="form-check">
                                <input type="radio" name="sm" <?php if (isset($sm) && $sm=="3") echo "checked";?> value="3"> 3<br>
                                <input type="radio" name="sm" <?php if (isset($sm) && $sm=="5") echo "checked";?> value="5"> 5 <br>
                                <input type="radio" name="sm" <?php if (isset($sm) && $sm=="7") echo "checked";?> value="7"> 7<br>
                            </div>
                        </div>
                        <br><br><br>
                        <table>
                            <tr>
                                <td>
                                        <input type="reset" value="Reset" name="Reset" class="btn-reset">            
                                </td>
                                <td>
                                        <input type="submit" value="Submit" name="Submit" class="btn-submit"> 
                                </td>
                            </tr>
                        </table>
                    </form>
            </div>
        </div>
    </body>
</html>
