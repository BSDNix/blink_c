<?php
if(!empty($_GET['act']))
{
  shell_exec('sudo ./lampje');
} else {
?>

<form action="index.php" method="get">
<input type="hidden" name="act" value="run">
<input type="submit" value="run dan">
</form>
<?php
      }
?>
