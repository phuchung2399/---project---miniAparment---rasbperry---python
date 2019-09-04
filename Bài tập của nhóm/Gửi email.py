import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
email = 'phuchung996@gmail.com'
password = '01670978939558'
send_to_email = 'phuchung2399@gmail.com'
subject = '[Email Warning]- Someone Broke Into Your House'
messageHTML = '<h2 style="color: #ff0000">Call the police immediately !!! </h2><p> We have detected someone breaking into your home. Please access the ip address via this <a href="http://10.79.8.81.:8080/">[LINK]<a> to follow the action at home.</span>'
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
