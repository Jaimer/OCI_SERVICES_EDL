<?php
$url = "https://docs.oracle.com/iaas/tools/public_ip_ranges.json";
$json_data = file_get_contents($url);
$oci = json_decode($json_data);
//echo '<html><head><meta name="color-scheme" content="ligh dark"></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">';
foreach ($oci->regions as $region) {
    foreach ($region->cidrs as $cidr) {
        echo "$cidr->cidr \n";
    }
}
//echo '</pre></body></html>';
