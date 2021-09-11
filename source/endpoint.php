<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $server = $_POST['server'];
    $json = $_POST['json'];
  
    $result = sha1($server); // Our result
    
    if ($json === 'enable') {
     
    }
}

  
echo '
<h1>Error - GET REQUEST</h1>

<hr>
Get requests are not supported!

<h1>
Api
</h1>

<p>
<strong>* means required</strong>
<samp>json</samp>
Return with a JSON request of if the server was blacklisted

<samp>server *</samp>
Checks if the server is blacklisted and sends a request back.
</p>
';
?>

