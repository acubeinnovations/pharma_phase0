<?php

if(isset($_POST['subject']) && isset($_POST['exam_summary'])){
$div_content='';
$div_content='<fieldset>
    <legend>'.$_POST['subject'].'-Exam Summary</legend><br><table width="100%" ><tr>
<td>No of Questions :</td><td> 5</td>
</tr>
<tr>
<td>Questions Attempted :</td><td> 4</td>
</tr>
<tr>
<td>Correct Answer:</td><td> 3</td>
</tr>
<tr>
<td>Total Score:</td><td> 100</td>
</tr>
<tr>
<td>Score:</td><td> 60</td>
</tr>
</tabel></fieldset>';
print $div_content;
exit();

}



?>
