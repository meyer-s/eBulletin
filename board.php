<html>
<style>
html{font-family:century gothic}
</style>
<body>
<h1> Northeastaern Community Events</h1>

<?php
   echo str_replace('  ', '&nbsp; ', nl2br(print_r($_POST, true)));
?>	

</body>
</html>