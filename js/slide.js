$(function(){
	var canslide = true;
	var count = $('.slidecontent .item').size();
	var wslidecontent = count*990;
	
	$('.slidecontent').css({'width':wslidecontent});
	var classed = "";
	$('.slidecontent .item').each(function(){
		if($(this).attr('id') == "item-0"){classed = "selected";}else{classed="noselect";}
		$('.slidenav').append('<a href="'+$(this).attr('id')+'" class="slidelinknav '+classed+'" id="link'+$(this).attr('id')+'"></a>');
	});
	
	var navcount = $('.slidelinknav').size();
	$('.slidenav').css({'width':(21*navcount)});
	
	$('.slidelinknav, #xtrig').live('click', function(){
		if(canslide){
			canslide = false;
			var a = $(this).attr('href');
			$('.slidecontent').stop().animate({left:-$('#'+a).position().left}, 800, function(){canslide = true;});
			$('.slidelinknav').each(function(){$(this).removeClass('selected').addClass('noselect');});
			$("#link"+a).removeClass('noselect').addClass('selected');
		}
		return false;
	});
	
	/*setInterval(function(){
		if(canslide){	
					canslide = false;
					var pos = $('.slidecontent').position();
					if(pos.left == (-wslidecontent+990)){$('.slidecontent').stop().animate({left:0}, 800, function(){canslide = true;});}
					else{$('.slidecontent').stop().animate({left:'-=990'}, 800, function(){canslide = true;});}
					
					for(var ind=0; ind<count; ind++)
					{
						var cons = 990*ind;
						var n = pos.left+cons;
						
						var indi = 0;
						if(ind<(count-1)){indi = 1+ind;}
						else{indi = 0;}
						
						if( n== 0){
							$('#linkitem-'+indi).removeClass('noselect').addClass('selected');
						}
						else
						{
							$('#linkitem-'+indi).removeClass('selected').addClass('noselect');
						}
					}
		}
	}, 5000);*/
});