<?php 
    include("connection.php");
    error_reporting(0);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Final Result</title>
    <style>
         *{
    box-sizing: border-box;
    padding: 0%;
    margin: 0%;
    font-family: 'Times New Roman', Times, serif,'Courier New', Courier, monospace;
} 
        body{
            background-color:rgb(7, 82, 245);
        }
        h1{
            text-align: center;
            text-transform:capitalize;
            margin-top:10px;
            color: chartreuse;
        }
        form{
            display: flex;
            justify-content: center;
        }
        table,th,td{
            border: 3px solid white;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
            padding: 10px;
            text-transform:capitalize;
        }
        th{
            background-color: white;
            font-size:2.4em;
        }
        td{
            font-size:1.5em;
        }
        h2{
            background-color:rgb(2, 187, 194);
            color: black;
            border-radius:10%;
            padding: 5px;
            width: 70px;
            height: 1.5em;
        font-size: 171%;
        border-radius: 50%;
        }
        button{
    width: 70%;
    height: 5%;
    background-color: lightblue;
    border: none;
    outline: none;
    color: black;
    padding: 6px;
    border-radius: 5px; 
    font-size: 1.2em;
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
   .c{
       display: flex;
       justify-content:center;
   }
   #l{
       font-size:1.7em;
   }
   #v{
       margin-top: 30px;
       width:15%;
   }
   a{
       text-decoration: none;
       color:black;
   }
   a:hover{
    color:darkcyan;
   }
   a:active{
       color:white;
   }
        </style>
</head>
<body>
<h1>digital Expo</h1>
    <h1>final result</h1>
    <div class="c">
    <button id="v"><a href="adminLoginForm.php"><i class="fa fa-user" aria-hidden="true"></i> Logout</a></button>
    </div><br>
    <div class="c">
<table>
            <tr>
                <th>S.no</th>
                <th>Project</th>
                <th>Team</th>
                <th>Number of Vote</th>
            </tr>
            <tr>
                <td>1:</td>
                <td>knife shooting games</td>
                <td><h2>A</h2></td>
                <?php  $s="SELECT sum(A)as sum FROM Voting";
    $r=mysqli_query($connection,$s);
    while($row=mysqli_fetch_assoc($r)){
        $sum=$row['sum'];
    ?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>2:</td>
                <td>password cracking and pin cracking</td>
                <td><h2>B</h2></td>
                <?php  $s="SELECT sum(B)as sum FROM Voting";
                    $r=mysqli_query($connection,$s);
                      while($row=mysqli_fetch_assoc($r)){
                    $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>3:</td>
                <td>pattern program(loop and condition)</td>
                <td><h2>C</h2></td>
                <?php  $s="SELECT sum(C)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>4:</td>
                <td>looping task function and digital clock</td>
                <td><h2>D</h2></td>
                <?php  $s="SELECT sum(D)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>5:</td>
                <td>tic tac toe game (x-o game)</td>
                <td><h2>E</h2></td>
                <?php  $s="SELECT sum(E)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>6:</td>
                <td>game using pytdon</td>
                <td><h2>F</h2></td>
               
                <?php  $s="SELECT sum(F)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>7:</td>
                <td>1.virtual painting using pytdon and open cv<br>
             2.stress buster games</td>
                <td><h2>G</h2></td>
               
                <?php  $s="SELECT sum(G)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>8:</td>
                <td>1.GPS tracker <br> 2.aduino robotic printer</td>
                <td><h2>H</h2></td>
               
                <?php  $s="SELECT sum(H)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>9:</td>
                <td>animation using HTML</td>
                <td><h2>I</h2></td>
               
                <?php  $s="SELECT sum(I)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>10:</td>
                <td>electronic project</td>
                <td><h2>J</h2></td>
               
                <?php  $s="SELECT sum(J)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>11:</td>
                <td>college community</td>
                <td><h2>K</h2></td>
               
                <?php  $s="SELECT sum(K)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>12:</td>
                <td>etdical hacking</td>
                <td><h2>L</h2></td>
               
                <?php  $s="SELECT sum(L)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>13:</td>
                <td>website scrapping</td>
                <td><h2>M</h2></td>
               
                <?php  $s="SELECT sum(M)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>14:</td>
                <td>alumni student details</td>
                <td><h2>N</h2></td>
               
                <?php  $s="SELECT sum(N)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>15:</td>
                <td>question bank website</td>
                <td><h2>O</h2></td>
               
                <?php  $s="SELECT sum(O)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>16:</td>
                <td>college students management system</td>
                <td><h2>P</h2></td>
               
                <?php  $s="SELECT sum(P)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>17:</td>
                <td>spiral on excel</td>
                <td><h2>Q</h2></td>
                    <?php  $s="SELECT sum(Q)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>18:</td>
                <td></td>
                <td><h2>R</h2></td>
                    <?php  $s="SELECT sum(R)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>19:</td>
                <td></td>
                <td><h2>S</h2></td>
                <?php  $s="SELECT sum(S)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
            <tr>
                <td>20:</td>
                <td></td>
                <td><h2>T</h2></td>
                    <?php  $s="SELECT sum(Q)as sum FROM Voting";
                     $r=mysqli_query($connection,$s);
                     while($row=mysqli_fetch_assoc($r)){
                     $sum=$row['sum'];?>
                <td id="l"><?php echo $sum?></td>
                <?php } ?>
            </tr>
        </table>
        </div>
</body>
</html>