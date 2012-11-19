// FAQ
$(document).ready(function(){
	$('.pergunta').bind('click', function(event){
		$('.pergunta.ativo').children().children('.pergunta_header').removeClass('pergunta_header_ativo');
		$('.pergunta.ativo').children().children('.pergunta_box').removeClass('pergunta_box_ativo');
		$('.pergunta.ativo').children('.pergunta_content').fadeOut(200);
		$('.pergunta.ativo').removeClass('ativo');
		$(this).addClass('ativo');
		$(this).children().children('.pergunta_header').addClass('pergunta_header_ativo');
		$(this).children().children('.pergunta_box').addClass('pergunta_box_ativo');
		$(this).children('.pergunta_content').fadeIn(200);
		});
	$('.pergunta').hover(
		function(){
			$(this).not('.pergunta.ativo').children().children('.pergunta_header').addClass('pergunta_header_ativo');
			$(this).not('.pergunta.ativo').children().children('.pergunta_box').addClass('pergunta_box_ativo');
			},
			function(){
			$(this).not('.pergunta.ativo').children().children('.pergunta_header').removeClass('pergunta_header_ativo');
			$(this).not('.pergunta.ativo').children().children('.pergunta_box').removeClass('pergunta_box_ativo');
			}
		);
	});