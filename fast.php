<?php

if(isset($_GET['operation'])){
  $Wh = $_GET['num1'];
  $ew = 1;
  $z1 = 0.5980;
  $z2 = 0.190 * pow(2,-0.743); 
  $z3 = 0.190 * pow(3,-0.743);
  $z4 = 0.190 * pow(4,-0.743);
  $z5 = 0.190 * pow(5,-0.743);
  $z6 = 0.190 * pow(6,-0.743);
  $z7 = 0.190 * pow(7,-0.743);
  $z8 = 0.190 * pow(8,-0.743);
  $z9 = 0.125 * pow(9,0.565);
  $z10 = 0.125 * pow(10,0.565);
  $z11 = 0.125 * pow(11,0.565);
  $z12 = 0.125 * pow(12,0.565);
  $z13 = 0.125 * pow(13,0.565);
  $z14 = 0.125 * pow(14,0.565);
  $z15 = 0.125 * pow(15,0.565);
  $z16 = 0.125 * pow(16,0.565);
  $z17 = 0.125 * pow(17,0.565);
  $z18 = 0.125 * pow(18,0.565);
  $z19 = 0.125 * pow(19,0.565);
  $z20 = 0.125 * pow(20,0.565);
  $z21 = 0.125 * pow(21,0.565);
  $z22 = 0.125 * pow(22,0.565);
  $z23 = 0.125 * pow(23,0.565);
  $z24 = 0.125 * pow(24,0.565);
  $z25 = 0.125 * pow(25,0.565);
  $z26 = 0.125 * pow(26,0.565); 
  $z27 = 0.125 * pow(27,0.565);
  $z28 = 0.125 * pow(28,0.565);
  $z29 = 0.125 * pow(29,0.565);
  $z30 = 0.125 * pow(30,0.565);
  $z31 = 0.125 * pow(31,0.565);
  $z32 = 0.125 * pow(32,0.565);
  $z33 = 0.125 * pow(33,0.565);
  $z34 = 0.125 * pow(34,0.565);
  $z35 = 0.125 * pow(35,0.565);
  $z36 = 0.125 * pow(36,0.565);            



  
 @$fresult=$_GET['fresult'];
  
@$result=$_GET['result'];
  
//for ($i=1; $i<=$result; $i++)
  
//{
   
 $fresult=$result+$result;
  

//}



  $op = $_GET['operation'];

  switch ($op) {

    case 'h':  $fresult = $ew * ($Wh * $z1) + $result ;
      break;

    case 'he': $fresult = $ew * ( $Wh * $z2 )+ $result;
      break;

    case 'li': $fresult = $ew * ( $Wh * $z3 )+ $result;
      break;

    case 'be': $fresult = $ew * ( $Wh * $z4 )+ $result;
      break;

    case 'b': $fresult = $ew * ( $Wh * $z5 )+ $result;
      break;

    case 'c': $fresult = $ew * ( $Wh * $z6 )+ $result;
      break;

    case 'n': $fresult = $ew * ( $Wh * $z7 )+ $result;
      break;

    case 'o': $fresult = $ew * ( $Wh * $z8 )+ $result;
      break;

    case 'f': $fresult = $ew * ( $Wh * $z9 )+ $result;
      break;

    case 'ne': $fresult = $ew * ( $Wh * $z10)+ $result;
      break;

    case 'na': $fresult = $ew * ( $Wh * $z11)+ $result;
      break;

   case 'mg': $fresult = $ew * ( $Wh * $z12)+ $result;
      break;

    case 'al': $fresult = $ew * ( $Wh * $z13)+ $result;
      break;

    case 'si': $fresult = $ew * ( $Wh * $z14)+ $result;
      break;

    case 'p': $fresult = $ew * ( $Wh * $z15)+ $result;
      break;

    case 's': $fresult = $ew * ( $Wh * $z16)+ $result;
      break;

   case 'cl': $result = $ew * ( $Wh * $z17)+ $result;
      break;

    case 'ar': $fresult = $ew * ( $Wh * $z18)+ $result;
      break;

    case 'k': $fresult = $ew * ( $Wh * $z19)+ $result;
      break;

    case 'ca': $fresult = $ew * ( $Wh * $z20)+ $result;
      break;


     
 


      
    
  }

}
 
   
//echo "Sum of given numbers=".$fresult;
 
   
 //<input type="submit" value="add">






?>


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
     <link rel="stylesheet" href="button.css" />
    <title>Neutron Converter</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
           <form action="" class="sign-in-form">
            <h2 class="title">Results</h2>
            <br>
              <marquee behavior="alternate" ><h4 for="result">Fast Neutron Result:  { ze = e[Wh(z/e)] }</h4></marquee>
            <div class="input-field">
              <i class="fas fa-user"></i>


              <input type="number" name="result" id="result" value="<?= $fresult  ?>" disabled/>
            </div>


            
          </form>
        

          <form action="<?= $_SERVER['PHP_SELF']?>" method="get" class="sign-up-form">
            <h2 class="title">Fast Neutron</h2>
            <p>Kindly Insert the weight mass of  each Element in the compound then click on the element to display the
               fast neutron of that element in the compound </p>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="float" name="num1" id="num1" placeholder="input Weight Mass of element" required="" />
            </div>
            
            <!--Operation-->

           <div class="scroll">
             <button class="button button1" type="submit" value="h" name="operation"><h4 style="color:whitesmoke;">Hydrogen<br>H<br>1</h4></button>

             <button class="button button2" type="submit" value="he" name="operation"><h4 style="color:whitesmoke">Helium<br>He<br>2</h4></button>
                    
             <button class="button button3" type="submit" value="li" name="operation"><h4 style="color:whitesmoke">Lithium<br>Li<br>3</h4></button>

             <button class="button button4" type="submit" value="be" name="operation"><h4 style="color:whitesmoke;">Beryllium<br>Be<br>4</h4></button>

             <button class="button button5" type="submit" value="b" name="operation"><h4 style="color:whitesmoke">Boron<br>B<br>5</Boron></h4></button>

             <button class="button button6" type="submit" value="c" name="operation"><h4 style="color:whitesmoke">Carbon<br>C<br>6</h4></button>

             <button class="button button1" type="submit" value="n" name="operation"><h4 style="color:whitesmoke">Nitrogen<br>N<br>7</h4></button>

             <button class="button button2" type="submit" value="o" name="operation"><h4 style="color:whitesmoke">Oxygen<br>O<br>8</h4></button>

             <button class="button button3" type="submit" value="f" name="operation"><h4 style="color:whitesmoke">Fluorine<br>F<br>9</h4></button>

             <button class="button button4" type="submit" value="ne" name="operation"><h4 style="color:whitesmoke">Neon<br>Ne<br>10</h4></button>

             <button class="button button5" type="submit" value="na" name="operation"><h4 style="color:whitesmoke">Sodium<br>Na<br>11</h4></button>
                      
             <button class="button button6" type="submit" value="mg" name="operation"><h4 style="color:whitesmoke">Magnesium<br>Mg<br>12</h4></button>

             <button class="button button1" type="submit" value="al" name="operation"><h4 style="color:whitesmoke">Aluminium<br>Al<br>13</h4></button>

             <button class="button button2" type="submit" value="si" name="operation"><h4 style="color:whitesmoke">Silicon<br>Si<br>14</h4></button>

             <button class="button button3" type="submit" value="p" name="operation"><h4 style="color:whitesmoke">Phosphorus<br>P<br>15</h4></button>

             <button class="button button4" type="submit" value="s" name="operation"><h4 style="color:whitesmoke">Sulfur<br>	S<br>	16</h4></button>

             <button class="button button5" type="submit" value="cl" name="operation"><h4 style="color:whitesmoke">Chlorine<br>	Cl<br>	17</h4></button>
             
             <button class="button button6" type="submit" value="ar" name="operation"><h4 style="color:whitesmoke">Argon<br>	Ar<br>	18</h4></button>

            
           <button class="button button1" type="submit" value="k" name="operation"><h4 style="color:whitesmoke">Potassium<br>	K<br>	19</h4></button>

             <button class="button button2" type="submit" value="ca" name="operation"><h4 style="color:whitesmoke">Calcium<br>	Ca<br>	20</h4></button>


             <button class="button button1" type="submit" value="sc" name="operation"><h4 style="color:whitesmoke;">Scandium<br>Sc<br>21</h4></button>

             <button class="button button2" type="submit" value="ti" name="operation"><h4 style="color:whitesmoke">Titanium<br>Ti<br>22</h4></button>
                    
             <button class="button button3" type="submit" value="v" name="operation"><h4 style="color:whitesmoke">Vanadium<br>V<br>23</h4></button>

             <button class="button button4" type="submit" value="cr" name="operation"><h4 style="color:whitesmoke;">Chromium<br>Cr<br>24</h4></button>

             <button class="button button5" type="submit" value="mn" name="operation"><h4 style="color:whitesmoke">Manganese<br>Mn<br>25</Boron></h4></button>

             <button class="button button6" type="submit" value="fe" name="operation"><h4 style="color:whitesmoke">Iron<br>Fe<br>26</h4></button>

             <button class="button button1" type="submit" value="co" name="operation"><h4 style="color:whitesmoke">Cobalt<br>Co<br>27</h4></button>

             <button class="button button2" type="submit" value="ni" name="operation"><h4 style="color:whitesmoke">Nikel<br>Ni<br>28</h4></button>

             <button class="button button3" type="submit" value="cu" name="operation"><h4 style="color:whitesmoke">Copper<br>Cu<br>29</h4></button>

             <button class="button button4" type="submit" value="zn" name="operation"><h4 style="color:whitesmoke">Zinc<br>Zn<br>30</h4></button>

             <button class="button button5" type="submit" value="ga" name="operation"><h4 style="color:whitesmoke">Gallium<br>Ga<br>31</h4></button>
                      
             <button class="button button6" type="submit" value="ge" name="operation"><h4 style="color:whitesmoke">Germanium<br>Ge<br>32</h4></button>

             <button class="button button1" type="submit" value="as" name="operation"><h4 style="color:whitesmoke">Arsenic<br>As<br>33</h4></button>

             <button class="button button2" type="submit" value="se" name="operation"><h4 style="color:whitesmoke">Selenium<br>Se<br>34</h4></button>

             <button class="button button3" type="submit" value="br" name="operation"><h4 style="color:whitesmoke">Bromine<br>Br<br>35</h4></button>

             <button class="button button4" type="submit" value="kr" name="operation"><h4 style="color:whitesmoke">Krypton<br>Kr<br>36</h4></button>

             <button class="button button5" type="submit" value="rb" name="operation"><h4 style="color:whitesmoke">Rubidium<br>Rb<br>37</h4></button>
             
             <button class="button button6" type="submit" value="sr" name="operation"><h4 style="color:whitesmoke">Strontium<br>Sr<br> 38</h4></button>

            
           <button class="button button1" type="submit" value="y" name="operation"><h4 style="color:whitesmoke">Yttrium<br>Y<br>39</h4></button>

             <button class="button button2" type="submit" value="zr" name="operation"><h4 style="color:whitesmoke">Zirconium<br>Zr<br>40</h4></button>







             <button class="button button1" type="submit" value="nb" name="operation"><h4 style="color:whitesmoke;">Niobium<br>Nb<br>41</h4></button>

             <button class="button button2" type="submit" value="mo" name="operation"><h4 style="color:whitesmoke">Molybdenum<br>Mo<br>42</h4></button>
                    
             <button class="button button3" type="submit" value="tc" name="operation"><h4 style="color:whitesmoke">Technetium<br>Tc<br>43</h4></button>

             <button class="button button4" type="submit" value="ru" name="operation"><h4 style="color:whitesmoke;">Ruthenium<br>Ru<br>44</h4></button>

             <button class="button button5" type="submit" value="rh" name="operation"><h4 style="color:whitesmoke">Rhodium<br>Rh<br>45</Boron></h4></button>

             <button class="button button6" type="submit" value="pd" name="operation"><h4 style="color:whitesmoke">Palladium<br>Pd<br>46</h4></button>

             <button class="button button1" type="submit" value="ag" name="operation"><h4 style="color:whitesmoke">Silver<br>Ag<br>47</h4></button>

             <button class="button button2" type="submit" value="cd" name="operation"><h4 style="color:whitesmoke">Cadmium<br>Cd<br>48</h4></button>

             <button class="button button3" type="submit" value="in" name="operation"><h4 style="color:whitesmoke">Indium<br>In<br>4 9</h4></button>

             <button class="button button4" type="submit" value="sn" name="operation"><h4 style="color:whitesmoke">Tin<br>Sn<br>50</h4></button>

             <button class="button button5" type="submit" value="sb" name="operation"><h4 style="color:whitesmoke">Antimony<br>Sb<br>51</h4></button>
                      
             <button class="button button6" type="submit" value="te" name="operation"><h4 style="color:whitesmoke">Tellurium<br>Te<br>52</h4></button>

             <button class="button button1" type="submit" value="i" name="operation"><h4 style="color:whitesmoke">Iodine<br>I<br>53</h4></button>

             <button class="button button2" type="submit" value="xe" name="operation"><h4 style="color:whitesmoke">Xenon<br>Xe<br>54</h4></button>

             <button class="button button3" type="submit" value="cs" name="operation"><h4 style="color:whitesmoke">Cesium<br>Cs<br>55</h4></button>

             <button class="button button4" type="submit" value="ba" name="operation"><h4 style="color:whitesmoke">Barium<br>Ba<br>56</h4></button>

             <button class="button button5" type="submit" value="la" name="operation"><h4 style="color:whitesmoke">Lanthanum<br>La<br>57</h4></button>
             
             <button class="button button6" type="submit" value="ce" name="operation"><h4 style="color:whitesmoke">Cerium<br>Ce<br>58</h4></button>

            
           <button class="button button1" type="submit" value="pr" name="operation"><h4 style="color:whitesmoke">Praseodymium<br>Pr<br> 59</h4></button>

             <button class="button button2" type="submit" value="nd" name="operation"><h4 style="color:whitesmoke">Neodymium<br>Nd<br>60</h4></button>
             
            
</div>
            
                      
                    
                      
            
            <p class="social-text"></p>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Fast Neutron</h3>
            <p>
            <maquee behavior="slide" direction="right">Welcome !!! please kindly click on proceed </maquee>
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Proceed =>
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Thermal Neutron</h3>
            <p>
             Kindly click here to find  fast neutron values of any element in a compound.
            </p>
            <button class="btn transparent" >
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
