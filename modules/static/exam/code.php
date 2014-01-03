<?php

if(isset($_POST['subject']) && isset($_POST['exam'])){
$div_content='';
$div_content='<h1>'.$_POST['subject'].'-Exam</h1><br><div class="medium-12 columns "><div class="medium-6 columns ">&nbsp;</div><div class="medium-6 columns ">&nbsp;</div>';
for($i=1;$i<=5;$i++){
$div_content.='<div class="medium-6 columns ">'.$i.'. Question....'.$i.'?<br><br><input type="radio" name="answer'.$i.'." value="1" ><label>Answer 1</label><br><input type="radio" name="answer'.$i.'." value="2" ><label>Answer 2</label></div><div class="medium-6 columns ">&nbsp;<br><br><br><br><br><br></div>';
}
$div_content.='<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="tiny button success finish_exam" subject="'.$_POST['subject'].'">FINISH</a><br><br>	</div>';
print $div_content;
exit();

}



?>
