<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

     <div class="container">
          <div class="row">
               <div class="col-6 py-5">
                  <h2>Form Request</h2>
                  <form method="POST">
                       <label class="mb-3" for="fname">First Name</label>
                       <input type="text" class="form-control mb-4" name="fname" placeholder="First Name">
                       <label class="mb-3" for="lname">Last Name</label>
                       <input type="text" class="form-control mb-4" name="lname" placeholder="Last Name">
                       <label class="mb-3" for="pass">Password</label>
                       <input type="password" class="form-control mb-4" name="pass" placeholder="Password">
                       <button type="submit" class="btn btn-primary" >Submit</button>
                  </form>
              </div>
              <div class="col-5 offset-1  py-5">
                <div class="userinput">
                  <h3 class="mb-5">Result Requiest</h3>
                  <p>First Name:
                    <?php
                      if(isset($_POST['fname']) && !empty($_POST['fname'])){
                        echo $_POST['fname'];
                      }else{
                        echo "Coming soon";
                      }
                     ?>
                  </p>
                  <p>Last Name:
                    <?php
                      if(isset($_POST['lname']) && !empty($_POST['lname'])){
                        echo $_POST['lname'];
                      }else{
                        echo "Coming soon";
                      }
                     ?>
                  </p>
                  <p>User Pass:
                    <?php
                      if(isset($_POST['pass']) && !empty($_POST['pass'])){
                        echo $_POST['pass'];
                      }else{
                        echo "Coming soon";
                      }
                     ?>
                  </p>

                </div>
                <div class="user-output">

                </div>

              </div>

          </div>
     </div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
