#!/bin/bash

day=$(date +"%d")
path_script=/home/mammatus95/Dokumente/Programmierung/synops

for i in 03 09 15 21
do
wget -qN http://www.met.fu-berlin.de/de/wetter/service/obs_10381/obs_si.${day}${i} -P ${path_script}
mv ${path_script}/obs_si.${day}${i} ${path_script}/obs_${day}${i}.txt
done

for i in 00 06 12 18
do
wget -qN http://www.met.fu-berlin.de/de/wetter/service/obs_10381/obs_sm.${day}${i} -P ${path_script}
mv ${path_script}/obs_sm.${day}${i} ${path_script}/obs_${day}${i}.txt
done

for i in {01..23}
do
wget -qN http://www.met.fu-berlin.de/de/wetter/service/obs_10381/obs_sn.${day}${i} -P ${path_script}
mv ${path_script}/obs_sn.${day}${i} ${path_script}/obs_${day}${i}.txt
done

scp -r ${path_script}/obs* mammatus95@login.zedat.fu-berlin.de:public_html/turm/fm12/

#rm obs*.txt








