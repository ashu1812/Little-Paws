<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>


body{
    background-color: #FCDEC0;
} 

.custname{
    font-family: Montserrat;
    font-weight: 700;
    font-size: 25px;
    color: #7D5A50;
    margin-left: 7%;
    margin-top: 3%;
}

.profilepic{
    margin-top: 3%;
    margin-left: 10%;
    width: 15%;
    border-radius:50%;
}

.logo{
  height: 25%;
  width: 20%;
  margin-top: 5%;
  margin-left: 5%;
}

form{

    margin-left: -4%;
    height: 200px;
    width: 420px;
    background-color: #E5B299;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 200px;
    left: 50%;
    border-radius: 10px;
    padding: 50px 35px;
}
.two{
    margin-left: 30%;
    height: 200px;
    width: 420px;
    background-color: #E5B299;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 500px;
    left: 50%;
    border-radius: 10px;
    padding: 50px 35px;
}

.text{
    font-family: Montserrat;
    font-size: 1.5rem;
}

.heading{
    font-weight: 700;
}