
LISTMAC=`grep mac /var/log/httpd/ssl_request_log* | cut -d" " -f3,7 | tr ' ' = | cut -d"=" -f1,3| cut -d"&" -f1 | sed s/%3A/:/g | sort | uniq` 
#178.31.189.7=00:11:62:1b:e5:40
NUMACT=`tail /var/log/httpd/ssl_request_log | cut -d' ' -f3 | sort | uniq | wc -l`
LISTACT=`tail /var/log/httpd/ssl_request_log | cut -d' ' -f3 | sort | uniq` 
echo List of printers used:  $LISTMAC
echo Number of iprinters now active: $NUMACT
echo List of now active printers: $LISTACT
