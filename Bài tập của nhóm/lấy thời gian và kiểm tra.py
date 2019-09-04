from datetime import datetime
now = datetime.now().time() 
dt_string = now.strftime("%H")
if(dt_string >= 18):
	print ("ajd")
else:
	print "adu"
