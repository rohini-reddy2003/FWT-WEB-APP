<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Red busses</title>
        <style>
            body{
                background-color: rgb(53, 133, 0);
            }
            .logo{
                width:200px;
                border-radius: 40px;
                height: 200px;
                filter:brightness(100px);
                border-color: red;
                border-style:solid;

            }
            .search-bar{
                text-transform:italic;
                position: absolute;
                top: 0;
                right:0;  
            }

            .heading{
                text-transform:uppercase;
                text-align:center;
                background-color: rgb(136, 194, 255);
                top: 200px;
                right:2px;
                width: 70%;
                height: 100%;
                color:red;
                 
                  
            }
            .patner{
                position: absolute;
                top: b40px;
                right:2px;
                width: 200px;
                border-radius: 100px;
                
            }
            .colabration{
                text-transform: uppercase;
                text-align: right;
                position: absolute;
                top:175px;
                right:2px;
                
            }
             .copy-rights{
                position: fixed; 
                bottom: 0;
                width:100%;
             }

             .offers{
                background-color: rgb(0, 17, 255);
                height:40px;
                font-style:italic;
                text-align:center;
                border-radius: 40px;
                padding-top: 20px;
                padding-bottom: 5px;
                position: relative;
                top:500px;
             }
             .scroll-container{
                border: 3px solid black;
                border-radius: 5px;
                overflow: hidden;
              }
              .scroll-text{
                text-align: right;
                transform: translateX(-100%);
                transform: translatex(+100%);
                animation-duration:8s ;
                animation-name:text ;
                animation-direction: alternate;
                animation-iteration-count:infinite;
                top:300px;
              }
              @keyframes text{
                from{transform: translateX(-100%);}
                to{transform: translateX(+100%);}

        
              }
              .direction{
                width:15px;
                height:10px;
              }
              .arrangement div{
               position: relative;
               display:inline-block;
                right:1px;
                left:25px;
                font-size: 20px;
                height:0;

            
               
                
              }
              .checkbox{
                position: absolute;
                top:275px;
               
              }
              .middle{
                position: relative;
               
                
              }
              .set{
                position: relative;
                left:30px;
              }
              .place{
                height:1px;
                top:100px;
              }
              

              


              
            
   
        </style>

    </head>
    <body style="
    height:1000px;
    width:auto;
    ">
        <input  class="search-bar" type="text" placeholder="search bus">
       <div> <img class="logo" src="C:\Users\rohini\OneDrive\Desktop\DBMS\red bus.jpg"></img></div>
        <div><img class="patner" src="C:\Users\rohini\OneDrive\Desktop\DBMS\allu.jpeg"></img>
            <p class="colabration">in colabration with </p></div>
            <div><p class="copy-rights">
                Copyright &#64;2023 redbus.ltd. All rights reserved. Use of this website indicates your compliance with our Privacy Policy, Conditions of Carriage, Terms and Conditions.
            </p></div>

           <div><p class="offers">
            book early for the best discounts on festivals.<span class="high">Booknow</span>
        </p></div> 
       
        
        <div style="background-color:yellow;
        height:auto;
        color:black;
        position:fixed;
        top:0;
        cursor: pointer;
        font-size: 30px;
        ">help?</div>
       <li style="display:inline-block;">
        <div>
            <form action="/redbuss.html">
           <ul calss="middle"><div class="checkbox">
           <label class="container">one way
            <input type="radio"  checked="checked"name="radio">
            <span class="checkmark"></span></label>
            <label class="container"> Round trip 
                <input type="radio"name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
        <li class="place">
        <label for="from"> from</label>
        <select name="city" id="city">
            <option value="hyderabad">hyderabad</option>
            <option value="delhi">delhi</option>
            <option value="goa">goa</option>
            <option value="bangalore">bangalore</option>
            <option value="tirupati">tirupati</option>
            <option value="mumbai">mumbai</option>
            <option value="chennai">chennai</option>
            <option value="kolkata">kolkata</option>
            <option value="lucknow">lucknow</option>
            <option value="amritsar">amritsar</option>
            <option value="visakhapatnam">visakhapatnam</option>
            <option value="kannur">kannur</option>
            <option value="indore">indore</option>
            <option value="ahmedabad">ahmedabad</option>
        </select>
        <img  class="direction"src="dirction.png"></img>
        <label for="to"> to</label>
        <select name="city" id="city">
            <option value="delhi">delhi</option>
            <option value="hyderabad">hyderabad</option>
            <option value="goa">goa</option>
            <option value="bangalore">bangalore</option>
            <option value="tirupati">tirupati</option>
            <option value="mumbai">mumbai</option>
            <option value="chennai">chennai</option>
            <option value="kolkata">kolkata</option>
            <option value="lucknow">lucknow</option>
            <option value="amritsar">amritsar</option>
            <option value="visakhapatnam">visakhapatnam</option>
            <option value="kannur">kannur</option>
            <option value="indore">indore</option>
            <option value="ahmedabad">ahmedabad</option>
        </select>
    </li>
        <br><br>
        
         </form></div>
         <br><br>
         <li class="arrangement">
         <div>
            <label for="adult">adult</label>
            <select name="adult" id="adult">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>   
         </div>
         
            <div>
            <label for="child">child</label>
            <select name="child" id="child">
             <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>   
         </div>
         <div>
           
            </select>   
         </div>
        </li>
         <div class="set">
            <lable for="economy">economy</lable>
            <select name="economy" id="economy">
                <option value="Economy">Economy</option>
                <option value="Business">business</option>
                <option value="First">First</option>
            </select>
         </div>
         <br><ul style=" position:absolut;left:135px;">
         <input type="submit"value="submit"></ul>
         <div></ul> 
            <div class="scroll-text"><p  class="heading">
           welcome to redbussese have a wonderfull journey!
        </p></div></div></li>


    </body>
</html>