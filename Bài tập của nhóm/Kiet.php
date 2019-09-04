<html>
        <head>
 <meta name="viewport" content="width=device-width" />
<title>LED Control</title>
 </head>
        <body>
         <h2>A LANG THI KIET</h2>
       <form method="get">
                <input type="submit" value="ON LED 1 4" name="on1">
                <input type="submit" value="ON LED 2 3" name="on2">
                <input type="submit" value="ON LED 5"   name="on3">
                <input type="submit" value="OFF" name="off">
        </form>
        <?php
        if(isset($_GET['on1'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 0");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  0");
        }
        else if(isset($_GET['on2'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 0");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  0");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
        }
        else if(isset($_GET['on3'])){
                 system("gpio -g mode 10 out");
                 system("gpio -g write 10 12");
        }
                
       else if(isset($_GET['off'])){
             system("gpio -g mode 17 out");
             system("gpio -g write 17 0");
             
             system("gpio -g mode 22 out");
             system("gpio -g write 22 0");
             
             system("gpio -g mode 22 out");
             system("gpio -g write 22 0");
             
             system("gpio -g mode 9 out");
             system("gpio -g write 9  0");
             
             system("gpio -g mode 4 out");
             system("gpio -g write 4  0");
             
             system("gpio -g mode 10 out");
             system("gpio -g write 10 0");
         }
        ?>
        </body>
 </html>
