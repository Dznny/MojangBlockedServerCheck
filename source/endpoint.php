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
<details>
<summary>json</summary>
Checks if the server is blacklisted and sends a JSON request back.
</details>
<br/>
<details>
<summary>server *</summary>
Checks if the server is blacklisted and sends a request back.
</details>
</p>
';
?>

