$( document ).ready(function() {
	$(".is-sub").hide();
});

$("#ftball").hover(function() {
	$("#ftball-sub").show()
	$("#bball-sub").hide()
});
$("#bball").hover(function() {
	$("#ftball-sub").hide()
	$("#bball-sub").show()
});
