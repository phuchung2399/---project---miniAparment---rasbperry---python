import RPi.GPIO as GPIO
import time
i = 0
while True:
    if i ==5:
	break
    else:
	i+=1  
    	GPIO.setmode(GPIO.BCM)
    	GPIO.setwarnings(False)
    	GPIO.setup(18,GPIO.OUT)
    	print "LED on"
    	GPIO.output(18,GPIO.HIGH)
    	time.sleep(0.1)
    	print "LED off"
    	GPIO.output(18,GPIO.LOW)
    	time.sleep(0.1)
