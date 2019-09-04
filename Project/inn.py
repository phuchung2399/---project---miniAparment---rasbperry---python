import RPi.GPIO as GPIO
import time
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from datetime import datetime
now = datetime.now().time()
gio = now.strftime("%H")
def sendEmail():
	email = 'phuchung996@gmail.com'
	password = '01670978939558'
	send_to_email = 'nhung.nguyen@student.passerellesnumeriques.org'
	subject = '[Email Warning]- Someone Broke Into Your House'
	messageHTML = '<h2 style="color: #ff0000">Call the police immediately !!! </h2><p> We have detected someone breaking into your home. Please access the ip address via this <a href="http://192.168.43.74:8080/">[LINK]<a> to follow the action at home.</span>'
	messagePlain = 'Visit nitratine.net for some great tutorials and projects!'
	msg = MIMEMultipart('alternative')
	msg['From'] = email
	msg['To'] = send_to_email
	msg['Subject'] = subject
	msg.attach(MIMEText(messagePlain, 'plain'))
	msg.attach(MIMEText(messageHTML, 'html'))
	server = smtplib.SMTP('smtp.gmail.com', 587)
	server.starttls()
	server.login(email, password)
	text = msg.as_string()
	server.sendmail(email, send_to_email, text)
	server.quit()
def OnOffLED():
	if(gio>=18 or gio==1 or gio==2 or gio==3 or gio==4 or gio==5 ):
		GPIO.setwarnings(False)
		GPIO.setmode(GPIO.BOARD)
		GPIO.setup(24,GPIO.OUT)
		GPIO.setup(21,GPIO.OUT)
		GPIO.setup(23,GPIO.OUT)
		# GPIO.output(10,1) => den ban hoc
		# GPIO.output(15,1) => dieu hoa
		GPIO.output(21,1)
                GPIO.output(23,1)
                GPIO.output(24,1)
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11, GPIO.IN)
GPIO.setup(3, GPIO.OUT)
while True:
        i=GPIO.input(11)
        if i==0:
            print ("Binh Thuong")
            GPIO.output(3, 0)
            time.sleep(0.1)
        elif i==1:
            print "Da phat hien co nguoi dot nhap"
            OnOffLED()
            GPIO.output(3, 1)
            time.sleep(0.1)
            sendEmail()
