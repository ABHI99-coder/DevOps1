<html>
<body style="background-color:blue">

<h1>My first PHP page</h1>

<?php
$output = shell_exec('ifconfig');
echo "<pre>$output</pre>";
?>

</body>
</html>
~                                                                                                                       ~            
