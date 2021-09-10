





<style>
    .button{
        border:none;
        color:white;padding:16px 32px;
        text-align:center;
        text-decoration:none;
        display: inline-block;
        font-size:16px;
        margin:4px 2px;
        transition duration:0.4s;
        cursor:pointer;
        height: 100px;
        weight:100px;
        border-radius:10px;
    }
    
    .button1{
        background-color:#F44336;
        color:black;
        border:2px;
    }
    .button1:hover{
        background-color:#1171c0;
        color:white;
    }.button2{
        background-color:#BA68C8;
        color:black;
        border:2px;
    }
    .button2:hover{
        background-color:#14528d;
        color:white;
    }
    .button3{
        background-color:#00BCD4;
        color:black;
        border:2px;
    }
    .button3:hover{
        background-color:#2e81ee;
        color:white;
    }
    .button4{
        background-color:#8BC34A;
        color:black;
        border:2px;
    }
    .button4:hover{
        background-color:#4473cc;
        color:white;
    }
    .scroll{
  overflow-x: hidden;
  overflow-y: auto;
  margin:4px;
  padding:4px;
  background-color:none;
  width:500px;
  height:330px;
}
    .button5{
        background-color:#FFEB3B;
        color:black;
        border:2px;
    }
    .button5:hover{
        background-color:#4473cc;
        color:white;
    }
.button6{
        background-color:#4473cc;
        color:black;
        border:2px;
    }
    .button6:hover{
        background-color:#3c95e9;
        color:white;
    }
    .card{
        box-shadow: 0 4px 0 rgba(0,0,0,0,2);
        transition:0.3s;
        width: 168px;
    }
    .card:hover{
        box-shadow:0 8px 16px 0 rgba(0,0,0,0,2);
    }
    .container{
        padding:2px 16px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Neutron Converter</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form">
            <h2 class="title">Thermal Neutron</h2>
            
           
            <input type="submit" value="proceed =>" class="btn solid" />
            <p class="social-text"></p>
            
          </form>
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Fast Neutron</h3>
            <p>
            <maquee behavior="slide" direction="right"> Kindly click here to find Fast neutron value for any element in a compound.</maquee>
            </p>
            <button class="btn transparent" ><a href="fast.php" style="text-decoration: none; color: whitesmoke">proceed =></a>

            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Thermal Neutron</h3>
            <p>
             Kindly click here to find  fast neutron values of any molecular formular.
            </p>
            <button class="btn transparent" id="sign-in-btn">
             proceed =>
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
