<?
/**
 * @author Greedi
 * @copyright 2012
 * 
 */
include ('core/banned.php');
include ('core/wallet.php');
include ('templates/header.php');
//include ('core/dnsbl.php');

?>
        <div class="row">
          <div class="span10">
<?
echo '<h4><center>Payout will happen when there are at least <strong>10</strong> submissions!<br></h4>
You can only enter once per round, if we detect the same IP or a proxy, you\'ll not be paid.';
?>
         
<style>
.tdr{text-align:right;}
</style>
<center><br>
<form action="submitted.php" method="post">
<td class="tdr"><font color="green">Your Marscoin Address Here:</font></td>
<td><input type="text" name="MRC"><p>Don't have a Marscoin address yet? Get one for <a href="http://marsaddress.org">free here</a></p></td>
<?php
echo GetCaptcha($adscaptchaID, $adspubkey);
?>
<td colspan="3" align="center"><input type="submit" value="Submit"></td>
</center>
</div>
<?
include ("templates/sidebar.php");
include ('templates/footer.php');
?>

