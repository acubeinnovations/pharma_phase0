<!--
$(document).ready(function(){

$('.subject-button').click(function(){  
subject=$(this).attr('subject');
var content='<a href="#" class="tiny">'+subject+'</a><br><br>';
$('.subject').html(content);

var content_exam='<a href="#" subject="'+subject+'" class="tiny button">TAKE EXAM</a>';
$('.exam').html(content_exam);

var content_chapter1='<a href="#" subject="'+subject+'" class="tiny link_chapter1">CHAPTER1</a><br><br>';
$('.chapter1').html(content_chapter1);
var content_chapter2='<a href="#" subject="'+subject+'" class="tiny link_chapter2">CHAPTER2</a><br><br>';
$('.chapter2').html(content_chapter2);
var content_chapter3='<a href="#" subject="'+subject+'" class="tiny link_chapter3">CHAPTER3</a><br><br>';
$('.chapter3').html(content_chapter3);
});

$( document ).on( "click", ".link_chapter1", function() {
subject=$(this).attr('subject');
alert(subject);

var success_post = $.post('chapter1.php',
		{
			subject:subject,
		});
	success_post.done(function(data){

	});

});



});

-->
