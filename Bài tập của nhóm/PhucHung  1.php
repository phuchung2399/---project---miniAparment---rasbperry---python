<html>
        <head>
 <meta name="viewport" content="width=device-width" />
<title>LED Control</title>
 </head>
        <body>
         <h2>LED Control:</h2>
       <form method="get">
                <input type="submit" value="ON LED 1 3" name="on1">
                <input type="submit" value="ON LED 2 4" name="on2">
                <input type="submit" value="OFF" name="off">
                <h3>-----------------------------------</h3>
                <input type="submit" value="LED 1" name="LEDONE">
                <input type="submit" value="LED 2" name="LEDTWO">
                <input type="submit" value="LED 3" name="LEDTHREE">
                <input type="submit" value="LED 4" name="LEDFOUR">
                 <input type="submit" value="OFF" name="off">
                <h3>-----------------------------------</h3>
                <input type="submit" value="AUTO 1 " name="AUTO">
                <input type="submit" value="OFF" name="off">
                <h3>-----------------------------------</h3>
                <input type="submit" value="AUTO 2" name="AUTOTWO">
                <input type="submit" value="OFF" name="off">
                <h3>-----------------------------------</h3>
                <input type="submit" value="AUTO 3" name="AUTOTHREE">
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
           else if(isset($_GET['LEDONE'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 0");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  0");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  0");
        }
           else if(isset($_GET['LEDTWO'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 0");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  0");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  0");
        }
           else if(isset($_GET['LEDTHREE'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 0");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 0");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  0");
        }
           else if(isset($_GET['LEDFOUR'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 0");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 0");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  0");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
        } 
        else if(isset($_GET['AUTO'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 sleep(1);
                 system("gpio -g write 17 0");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 sleep(1);
                 system("gpio -g write 22 0");
                  
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 sleep(1);
                 system("gpio -g write 9 0");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
                 sleep(1);
                 system("gpio -g write 4 0");
                 
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                  
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
                
                }
                else if(isset($_GET['AUTOTWO'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 sleep(1);
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 sleep(1);
                 system("gpio -g write 22 3");
                  
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 sleep(1);
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
                 sleep(1);
                 system("gpio -g write 4  7");

                }
                else if(isset($_GET['AUTOTHREE'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
                 
                 sleep(1);
                 
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
         }
        ?>
        </body>
 </html>
