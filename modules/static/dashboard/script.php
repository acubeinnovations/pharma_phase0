<!--
$(document).ready(function(){

$('.subject-button').click(function(){  
subject=$(this).attr('subject');

var chapter_content='<br><div class="medium-12 columns "><div class="medium-10 columns subject "><a href="#" class="tiny"><b>'+subject+'</b></a><br><br></div></div><div class="medium-12 columns"><div class="medium-10 columns chapter1 "><a href="#" subject="'+subject+'" class="tiny link_chapter1">CHAPTER1</a><br><br></div></div><div class="medium-12 columns"><div class="medium-10 columns chapter2"><a href="#" subject="'+subject+'" class="tiny link_chapter2">CHAPTER2</a><br><br></div></div><div class="medium-12 columns"><div class="medium-10 columns chapter3"><a href="#" subject="'+subject+'" class="tiny link_chapter3">CHAPTER3</a><br><br></div></div>';

$('.chapters').html(chapter_content);

var content_exam='<a href="#" subject="'+subject+'" class="tiny button exam-button">TAKE EXAM</a>';
$('.exam').html(content_exam);

});

$( document ).on( "click", ".link_chapter1", function() {
subject=$(this).attr('subject');

var chapter1='chapter1';
var success_post = $.post('chapters.php',
		{
			subject:subject,
			chapter1:chapter1,
		});
	success_post.done(function(data){
		$('.chapters').html(data);
	});
});

$( document ).on( "click", ".link_chapter2", function() {
subject=$(this).attr('subject');

var chapter2='chapter2';
var success_post = $.post('chapters.php',
		{
			subject:subject,
			chapter2:chapter2,
		});
	success_post.done(function(data){
		$('.chapters').html(data);
	});

});

$( document ).on( "click", ".link_chapter3", function() {
subject=$(this).attr('subject');

var chapter3='chapter3';
var success_post = $.post('chapters.php',
		{
			subject:subject,
			chapter3:chapter3,
		});
	success_post.done(function(data){
		$('.chapters').html(data);
	});

});


$( document ).on( "click", ".exam-button", function() {
subject=$(this).attr('subject');

var exam='exam';
var success_post = $.post('exams.php',
		{
			subject:subject,
			exam:exam,
		});
	success_post.done(function(data){
		$('.chapters').html(data);
	});

});

$( document ).on( "click", ".finish_exam", function() {
subject=$(this).attr('subject');

var exam_summary='exam_summary';
var success_post = $.post('exam_summary.php',
		{
			subject:subject,
			exam_summary:exam_summary,
		});
	success_post.done(function(data){
		$('.chapters').html(data);
	});

});


});

-->
