<!DOCTYPE html>
<html lang="id">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">

    <!-- Css Login -->
    <link rel="stylesheet" href="styles/login.css">
    <style type="text/css">
        body{
        background:url(img/Menu/bggg2.png);
        background-repeat: repeat-y;
        background-size: 100%;
        
      }
      #container{
        overflow: hidden;
      }
      #Login{
        float: left;
        margin-top: 5px;
      }
      #Mamah{
        padding-left:700px;
        padding-top: 180px;
      }
      .form1{
          margin: -415px 205px;
       }
      @media screen and (max-width: 720px) {  
        #Mamah{
          display: none;
          }
      }
    </style>
</head>

<!-- body -->
<body>

    <!-- container -->
    <div class="container">
        <div id="login" class="card o-hidden border-0 shadow-lg my-5">
            <div class="row justify-content-center p-5">
                <div class="col-md-6 d-none d-md-block login-image p-5"></div>
                <div class="col-md-6 p-5">
                    <img src="img/Login/Kotak Login-01.png" style="width: 600px; margin-left: 45px; margin-bottom: 80px;"/>
                    <div class="form1">
                    <!-- form login -->
                    <form method="POST" action="cek_login.php" class="user">
                        
                        <!-- input username -->
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Username" style="height: 42px; width: 35%; margin-left: 20px; margin-top: 3px; border: none;">
                        </div>

                        <!-- input password -->
                        <div class="mb-3">
                            <input type="password" class="form-control form-control-user" id="pass" name="pass"
                                placeholder="Password" style="height: 42px; width: 35%; margin-left: 20px; margin-top: 16px; border: none;">
                        </div>

                        <!-- tombol login -->
                        <div class=" button mb-3 text-center d-grid gap-md-2 mx-auto"><button type="submit" class="btn btn-dark btn-user" name="submit" style="width: 100px; height: 30px; margin-top: 17px; margin-left: 100px; background-color: #0066ff; border-radius: 5px; border-color: #0066ff; color: white;">Log In</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="Mamah">
                        <img src="img/Login/Mamah_.png" style="width: 500px; margin: -185px 45px 50px -35px; ">
                        </div>
    </div>
</body>
</html>

