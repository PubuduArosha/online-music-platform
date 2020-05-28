<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css"/>

    <link rel="stylesheet" href="<?=PR?>/css/PaymentDetails.css" />

    <title>Payment Details</title>

  </head>

  <body>

    <div class="bckgrnd">

      <center>

        <div class="container lar" style="white-space:nowrap">

          <div class="formPadding">

            <div class="col-md-8 col-lg-12 forms">

              <div className="formBackground">

                <form class=" p-5 formArea">

                  <h2 class="formTitle">Add Payment Details</h2>
                  
                  <p class="textBoxLable">Full Name On The Card</p>
                  <input type="text" class="form-control mb-5 inputBox" required/>

                  <p class="textBoxLable">Card Number</p>
                  <input type="text" class="form-control mb-5 inputBox" required/>

                  <p class="textBoxLable">Address</p>
                  <input type="text" class="form-control mb-5 inputBox" required/>

                  <p class="textBoxLable">Expiration Date</p>
                  <input type="date" class="form-control mb-5 inputBox" required/>

                  <p class="textBoxLable">Card CVV</p>
                  <input type="text" class="form-control mb-5 inputBox" required/>

                  <button class="btn btn-info my-1   submitButton" type="submit">Pay Now !</button>

                </form>
                <p class="cardIconText">We Accept : </p>
                <img src="../uploads/Payment_Details/visa.png" class = "cardIcons">
                <img src="../uploads/Payment_Details/mastercard.png" class = "cardIcons">
                <img src="../uploads/Payment_Details/paypal.png" class = "cardIcons">
                <img src="../uploads/Payment_Details/american-express.png" class = "cardIcons">

              </div>

            </div>

          </div>

        </div>

      </center>

    </div>

  </body>

</html>