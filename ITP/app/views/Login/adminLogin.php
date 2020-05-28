
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="<?=PR?>/css/SignIn.css" />
    <title>Sign In</title>
  </head>
  <body>
    <div class="back" style="background-image: linear-gradient(to right bottom, rgba(18, 18, 18 , 0.9), rgba(0, 0, 0 , 0.9) ) , url(<?=PR?>/uploads/backAdmin.jpg) !important;">
    
    <center>
        <div class="container">
          <div class="formPadding">
            <div class="col-md-8 col-lg-12 forms">
              <div className="formBackground">
              <img src="<?=PR?>/uploads/logo.png" class="avatar" />
                <form class=" p-5 formCus" action="<?=PR?>/Login/ValidateAdmin" method="POST">
                  <p class="h4 mb-4 formTitle">Admin Login</p>

                  <input name="userName"
                    type="text"
                    class="form-control mb-5 inputbox"
                    placeholder="User Name "
                    required
                  />

                  <input name="password"
                    type="password"
                    class="form-control mb-5 inputbox"
                    placeholder="Password"
                    required
                  />
                  <button class="btn btn-info my-1   submitBtn" type="submit">
                    Sign in
                  </button>
                  <br />
                

                 
                </form>
              </div>
            </div>
          </div>
          
      </center>
    </div>
  </body>
</html>
