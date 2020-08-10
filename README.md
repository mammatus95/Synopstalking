#Synopstalking

PHP Programm to print and check the weather reports of 10381

##Output Version
###Sysnops of the last two days
https://userpage.fu-berlin.de/mammatus95/turm/fm12/synops.php
###Sysnops of the last two days with error message
https://userpage.fu-berlin.de/mammatus95/turm/fm12/synopsturm.php
###Sysnops of the last 10 days
https://userpage.fu-berlin.de/mammatus95/turm/fm12/quali.php

##Datasource
http://www.met.fu-berlin.de/de/wetter/service/obs_10381/

###How its work

1. Downloading files from the data source. Change the confusing names. And uploading the files to the zedat server. The bash script is located in the getReports directory.

2. PHP script run every 120 sec and actually do complete checking, error output, and the website layout (with css file).
