<table>
<tr>
<td>titre</td>
<td>...</td>
<td>...</td>
<td>Action</td>
</tr>
<?php
foreach ($lesNews as $uneNews) {
   echo "<tr><td>".$uneNews->titre."</td><td></td><td>".$uneNews->dteFr()."</td><td></td></tr>";
}

?>
</table>