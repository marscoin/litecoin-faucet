<div class="span4"> <!-- This is the sidebar, don't forget -_- -->
<?
include ('core/daily.php');
echo '
            <div style="margin-right: 10px;">
            <h3><center>Faucet statistics</center></h3>
            <table class=\'zebra-striped\'>
                        <tr><td>Submitted This Round: </td><td>' . $rows2 . '</td></tr>
<tr><td>Current Payout: </td><td>' . $roundltc . ' MRS</td></tr> 
<tr><td>Current Round: </td><td>' . $round . '. round </td></tr>
            <tr><td>Total Payout: </td><td>' . $dailytotal . ' MRS</td></tr>
</table>';
?>

<center>
<p></p>

<br>
</a>

</center></div>
          
