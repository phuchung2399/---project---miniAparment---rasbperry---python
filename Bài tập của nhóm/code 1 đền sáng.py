import RPi.GPIO as GPIO
import time
while True:  
    	GPIO.setmode(GPIO.BCM)
    	GPIO.setwarnings(False)
    	GPIO.setup(8,GPIO.OUT)
    	print "LED on"
    	GPIO.output(8,GPIO.HIGH)
    	time.sleep(0.1)
    	print "LED off"
    	GPIO.output(8,GPIO.LOW)
    	time.sleep(0.1)
