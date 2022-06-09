<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRBCCC HINDU COLLEGE</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
        /* commen for all */
*{
    box-sizing: border-box;
    padding: 0%;
    margin: 0%;
    font-family: Georgia, 'Times New Roman', Times, serif,monospace;
}
.center{
    display: flex;
    justify-content: center;
}
/* body of the page  */
body{
    background-color: aquamarine;
}
/* title of the form */
h1{
 text-transform: uppercase;
 font-size: 100%;
 color: black;
 padding-bottom: 15px;
 padding-top: 15px;
 text-align: center;
 margin-top:-21px;
}
/* background of the form */
.container{
    background:linear-gradient(to right,rgba(247, 244, 244,1),rgba(247, 244, 244, 1));
    width: 30%;
    height: 21.3rem;
    margin: 12% 30% 0 35%;
    border-radius: 10px;
}
/* form design */
form{
  padding: 15px;
  margin: 15px;
}
/*lable design */
label{
    font-size:1.3rem;
    text-transform:uppercase;
}
/*input design */
input{
    
    padding: 5px;
    margin: 5px;
    width: 90%;
    border:1.5px solid black;
    outline: none;
  border-bottom-right-radius: 6px;
  border-top-right-radius:6px;
  border-left-style: none;
  margin-left: 30px;
}
/*input placeholder design */
input::placeholder{
    font-size: .9rem;
    text-transform: uppercase;
    padding-left: 5px;
}

/*submit button design */
button{
    width: 70%;
    height: 5%;
    background-color: lightblue;
    border: none;
    outline: none;
    color: white;
    padding: 6px;
    border-radius: 5px; 
    font-size: 1.5em;
    text-transform:capitalize;  
    cursor: pointer;
   }
   button:hover{
       color:darkcyan;

   }
   button:active{
       background-color: royalblue;
       color:white;
   }
/* line design */
.line1{
       background: black;
       width: 30%;
       height: 3px;
       float: left;
   }
   .line2{
    background: black;
    width: 30%;
    height: 3px;
    float: right;
   }
/* password visibile */
.fa-eye {
  float: right;
  margin-top: -30px;
  margin-right: 25px;
  position: relative;
  z-index: 2;
  font-size: 100%;
  cursor: pointer;
}
.fa-eye-slash{
    float: right;
    margin-top: -33px;
    position: relative;
    z-index: 2;
    font-size: 100%;
    cursor: pointer;
}
#hide{
    
    display: none;
}
/*icon design */
.fa-user{
    float:left;
    margin-top: -34px;
    margin-left:9px;
  margin-right: 13px;
    position: relative;
    border:1.5px solid black;
    padding: 2.7px;
    background-color: white;
    border-right-style: none;
    border-bottom-left-radius: 6px;
  border-top-left-radius:6px;
  }
  .fa-lock{
    float:left;
    margin-top: -34px;
    margin-left:11px;
  margin-right: 13px;
    position: relative;
    border:1.5px solid black;
    padding: 2.7px;
    background-color: white;
    border-right-style: none;
    border-bottom-left-radius: 6px;
  border-top-left-radius:6px;
  }
  /* alter message */
#error{
    background: pink;
    opacity: .5;
    width: 93%;
    height: 35px;
    color:red;
    border-radius: 6px;
    padding-top:7px ;
    padding-left: 10px;
    position: relative;
    top: -5px;
    left: 0px;
    text-align:center;
    text-transform:capitalize; 
    clear: both; 
}
p{
    margin-left: 15px;
}
/* media screen */
@media (min-width:333px) and (max-width:900px){
    .container{
        width: 95%;
        margin:10px;
    }
}
@media (max-width:363px){
    .container{
        width: 95%;
        margin:10px;
    }
    h1{
        font-size:83%;
    }
}
@media (max-width:310px){
    .container{
        width: 95%;
        margin:10px;
    }
    h1{
        font-size:55%;
    }
}

@media (min-width:900px) and (max-width:1104px){
h1{
    font-size:75%;
}
}
    </style>
</head>
<body>
    <div class="container">
    <div class="center">
    <form action="adminLogin.php" method="post" id="submit"> 
    <div class="line1"></div>
    <div class="line2"></div>  
    <h1>Admin login</h1>
    <?php
    if(isset($_GET['alert'])){?>
    <p id="error"><?php echo $_GET['alert'];?> </p>
    <?php }?> 
    <label for="email">username :<br>
        <input type="text" name="username" id="username" placeholder="username">
        <i class="fa fa-user"></i>
    </label><br>
    <label for="password">password :<br>
        <input type="password" name="password" id="password" placeholder="password">
        <i onclick="show()" class="fa fa-eye" id="s1"></i>
        <i  onclick="show()" class="fa fa-eye-slash" id="hide"></i>
        <i class="fa fa-lock" aria-hidden="true"></i>
    </label><br>
    <br>
    <div class="center">
        <button onclick="submit()">submit</button>
        </div>
    </form>
</div>
</div>
<script>
       var e=document.getElementById("username");
    var p=document.getElementById("password");
    function submit(){
    if(e.value==''){
        alert ("password is required");
     }else if(p.value==''){
       alert ("password is required");
    }else{
    document.getElementById("clear").submit();
 }
}
      var e=document.getElementById("email");
    var p=document.getElementById("password");
    function submit(){
    if(e.value==''){
        alert ("email is required");
     }else if(p.value==''){
       alert ("password is required");
    }else{
    document.getElementById("clear").submit();
 }
}
function show(){
    if(p.type=="password"){
        p.type="text";
        document.getElementById("hide").style="display:inline-block;color:red;font-size: 100%;margin-right:32px;margin-top:-30px";
        document.getElementById("s1").style="display:none;";
    }else{
        p.type="password";
        document.getElementById("hide").style="display:none";
        document.getElementById("s1").style="color:black";
        document.getElementById("s1").style="display:inline-block;";
    }
}
</script>
</body>
</html>