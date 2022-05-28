<html>
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
                Yay! Form successfully filled!
            </h2>
        </header>
        <div class="wrapper">
            <div class="container bg-white">
                <h2 class="container-header text-center">Good job, hope it'll be the best decision!</h2>
                <table class="form">
                    <tr>
                        <td>1. Full Name </td> 
                        <td>: <?php echo $name = $_POST['name']; ?></td> 
                    </tr>
                    <tr>
                        <td >2. Place and Date of Birth </td>
                        <td>: <?php echo $island = $_POST['island'], " ", $Date = $_POST ['Date'], " ", $Month = $_POST ['Month'], " ",  $Year = $_POST ['Year']; ?> </td>
                    </tr>
                    <tr>                  
                        <td >3. Address </td>
                        <td>: 
                            <?php
                               class Address{
                                  private $address;
                                  public function setAddress($address){
                                     $this->address = $address;
                                  }
                                  public function getAddress(){
                                     return $this->address;
                                  }
                               }
                               $address1 = new Address();
                               $address1->setAddress($_POST['address']);
                               $address2 = $address1->getAddress();
                               echo $address2;
                            ?>
                        </td>
                    </tr>
                    <tr>                  
                        <td >4. Religion </td>
                        <td>: <?php echo $religion = $_POST['religion']; ?></td>   
                    </tr>
                    <tr>                  
                        <td >5. University Origin </td>
                        <td>: <?php echo $university = $_POST['university']; ?></td>
                    </tr>
                    <tr>                  
                        <td >6. Gender </td>
                        <td>: <?php echo $jk = $_POST['jk']; ?></td>
                        <?php $jk = $_POST['jk'];
                        if ($jk == 'Male')
                                {
                            $hasil = 'Nice to meet you, Mr. '.$name; 
                                }
                                else
                                {
                            $hasil = 'Nice to meet you, Mrs. '.$name;
                                }       
                            echo $hasil;
                        ?>
                            </td>
                    </tr>
                    <tr>                  
                        <td >7. Student Number </td>
                        <td>: <?php echo $sn = $_POST['sn']; ?></td>
                    </tr>
                    <tr>    
                        <td>Now you're in Semester <b>
                        <?php
                        if (isset($_POST['sm'])) {  
                          echo $_POST['sm']." <br/>";  
                            }  
                        ?><b>
                      </td>
                    </tr>
                </table>
            </div>
        </div>      
    </body>
</html>
