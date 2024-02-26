<table style="border:2px solid black">
<?php for($j=0;$j<=7;$j++){ ?>

<tr>
<!-- <td>hello</td> -->
<?php for($i=1;$i<=7;$i++){ ?>

<td style="border:1px solid black"><?php echo ($i+($j*7));?></td>

<?php } ?>
</tr>
<?php } ?>
</table>