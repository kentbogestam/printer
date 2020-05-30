<!DOCTYPE html>
<html>
<body>
<?php 
$active_printers=system( 'tail  -200 /var/log/httpd/ssl_request_log | cut -d\' \' -f3 | sort | uniq  | wc -l 2>/dev/null' ); 
echo "<h2>Active Printers are " . $active_printers  . "!</h2>";
echo "<br>";
?>
</body>
</html>
