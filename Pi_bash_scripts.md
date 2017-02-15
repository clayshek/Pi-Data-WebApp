# Example BASH Scripts for Raspberry Pi

## Pi Heartbeat

pi_heartbeat.sh

<pre><code>
#!/bin/bash

pi_id=1
hostname=$(hostname)
uptime=$(uptime -p)
kernel=$(uname -r)
ips=$(hostname -I)

curl --data "id=$pi_id&hostname=$hostname&kernel=$kernel&uptime=$uptime&local_ip=$ips" http://YOURURLHERE/api/PiHeartbeat


</code></pre>

## UPS Data Push

ups_data_push.sh

<pre><code>
#!/bin/bash

pi_id=1
date=$(/sbin/apcaccess | egrep -w 'DATE' | cut -d ":" -f2,3 | xargs)
upsname=$(/sbin/apcaccess | egrep -w 'UPSNAME' | cut -d ":" -f2 | xargs)
model=$(/sbin/apcaccess | egrep -w 'MODEL' | cut -d ":" -f2 | xargs)
status=$(/sbin/apcaccess | egrep -w 'STATUS' | cut -d ":" -f2 | xargs)
linev=$(/sbin/apcaccess | egrep -w 'LINEV' | cut -d ":" -f2 | xargs)
loadpct=$(/sbin/apcaccess | egrep -w 'LOADPCT' | cut -d ":" -f2 | xargs)
bcharge=$(/sbin/apcaccess | egrep -w 'BCHARGE' | cut -d ":" -f2 | xargs)
timeleft=$(/sbin/apcaccess | egrep -w 'TIMELEFT' | cut -d ":" -f2 | xargs)
battv=$(/sbin/apcaccess | egrep -w 'BATTV' | cut -d ":" -f2 | xargs)
lastxfer=$(/sbin/apcaccess | egrep -w 'LASTXFER' | cut -d ":" -f2 | xargs)

curl --data "pi_id=$pi_id&upsname=$upsname&date=$date&model=$model&status=$status&linev=$linev&loadpct=$loadpct&bcharge=$bcharge&timeleft=$timeleft&battv=$battv&lastxfer=$lastxfer" http://YOURURLHERE/api/UpsHeartbeat

</code></pre>

## To-Do

- Rewrite in Python
- Add config file for Pi with configurable (non hard coded) ID and API endpoint
- Add SMS notification on UPS power out events

## License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).