<html>
        <head>
 <meta name="viewport" content="width=device-width" />
<title>LED Control</title>
 </head>
        <body>
         <h2>LED Control:</h2>
       <form method="get">
                <h3>---------------- Ho Thi Cam ------------</h3>
                <input type="submit" value="ON" name="AUTO">
                <input type="submit" value="OFF" name="off">
        </form>
        <?php
        
                 if(isset($_GET['AUTO'])){
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 1");
                 
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 3");
                 
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  13");
                 
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  7");
                 
                  system("gpio -g mode 27 out");
                 system("gpio -g write 27 2");
                 
                 sleep(3);
                 
                 system("gpio -g mode 17 out");
                 system("gpio -g write 17 0");
             
                 system("gpio -g mode 22 out");
                 system("gpio -g write 22 0");
                     
                     
                 system("gpio -g mode 9 out");
                 system("gpio -g write 9  0");
                     
                 system("gpio -g mode 4 out");
                 system("gpio -g write 4  0");
                 
                  system("gpio -g mode 27 out");
                 system("gpio -g write 27 0");

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
