#!/bin/bash

day=$(date -d "1 day ago" '+%d')
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

day=$(date -d "2 day ago" '+%d')
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

day=$(date -d "3 day ago" '+%d')
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

day=$(date -d "4 day ago" '+%d')
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

day=$(date -d "5 day ago" '+%d')
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



#rm obs*
day=$(date -d "-2 days ago" '+%d')
rm -f ${path_script}/obs_${day}*.txt

day=$(date -d "next day" '+%d')
rm -f ${path_script}/obs_${day}*.txt

ssh mammatus95@login.zedat.fu-berlin.de rm public_html/turm/fm12/obs_${day}*.txt
ssh mammatus95@login.zedat.fu-berlin.de ls public_html/turm/fm12/obs_${day}*.txt

scp -r ${path_script}/obs* mammatus95@login.zedat.fu-berlin.de:public_html/turm/fm12/







