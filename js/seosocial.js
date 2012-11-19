/******************************************************
	* jQuery plug-in
	* So So Social Activity Feed
	* Services accessed: Facebook, Delicious, Twitter, Last.FM, Flickr
	* Developed by J.P. Given (http://johnpatrickgiven.com)
	* Useage: anyone so long as credit is left alone
******************************************************/

var ss = {};

ss.TWITTER_RSS = 'http://twitter.com/statuses/user_timeline/seomarketingbr.rss';
ss.FACEBOOK_RSS = 'http://www.facebook.com/feeds/page.php?id=111352212269609&format=rss20';
ss.GOOGLEPLUS_JSON="https://www.googleapis.com/plus/v1/people/103539467002059704933/activities/public?alt=json&maxResults=20&fields=items%28published%2Ctitle%2Curl%29&pp=1&key=AIzaSyCoQZdPq-lHlaJRg0IRM6Vrkd2upoHjdQU";
ss.MAXFEEDS = 5;
ss.ACTIVITY_ARRAY = new Array();
ss.ACTIVITY_ARRAY['FACEBOOK'] = new Array();
ss.ACTIVITY_ARRAY['GOOGLEPLUS'] = new Array();
ss.ACTIVITY_ARRAY['TWITTER'] = new Array();
ss.ERROR = new Array();
ss.ERROR['FACEBOOK'] = 0;
ss.ERROR['TWITTER'] = 0;
ss.ERROR['GOOGLEPLUS'] = 0;
ss.TWITTER_FINISHED = 0;
ss.FACEBOOK_FINISHED = 0;
ss.GOOGLEPLUS_FINISHED = 0;
ss.CONTAINER = null;
ss.COUNTT = 0;
ss.COUNTF = 0;
ss.COUNTG = 0;
ss.AUX = 0;

(function($) {
	$.fn.SeoSocial = function(callback) {
		
		ss.CONTAINER = $(this);
		
		// Twitter
		if (ss.TWITTER_RSS != "") {
			$.getJSON("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%3D%22"+encodeURIComponent(ss.TWITTER_RSS)+"%22&format=json&callback=?", function(d) {
				//grab ever rss item from the json result request
				if (d.query.results.rss) {
					$(d.query.results.rss.channel.item).each(function() {
						//if set up to be infinite or the limit is not reached, keep grabbing items
						var title = this.title;
						var link = this.link;		
						//append to the div
						ss.ACTIVITY_ARRAY['TWITTER'][ss.COUNTT] = new Array();
						ss.ACTIVITY_ARRAY['TWITTER'][ss.COUNTT][0] = '<a href="' + link + '" target="_blank">'+title+'</a>';
						ss.COUNTT++;
					});
					while(ss.COUNTT <= ss.MAXFEEDS)
					{
						ss.ACTIVITY_ARRAY['TWITTER'][COUNTT]= new Array();
						ss.ACTIVITY_ARRAY['TWITTER'][COUNTT][0] = ss.ACTIVITY_ARRAY['TWITTER'][ss.AUX][0];
						ss.COUNTT++;
						ss.AUX++;
						if(ss.AUX + ss.COUNTT == ss.MAXFEEDS){ss.AUX=0};
					}
					ss.TWITTER_FINISHED = 1;
				} else {
					ss.ERROR['TWITTER'] = 1;
					ss.TWITTER_FINISHED = 1;
				}
				
				
			});
			
		} else { //if not on twitter set it to done.
			ss.TWITTER_FINISHED = 1;
		}
		
		
		if (ss.FACEBOOK_RSS != '') {
			$.getJSON("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20xml%20where%20url%3D%22"+encodeURIComponent(ss.FACEBOOK_RSS)+"%22&format=json&callback=?", function(d) {
				//grab ever rss item from the json result request
				if (d.query.results.rss) {
					$(d.query.results.rss.channel.item).each(function() {
						//if set up to be infinite or the limit is not reached, keep grabbing items
						var title = this.title;
						var link = this.link;
						var description = this.description;
						var pubDate = this.pubDate;
						pubDate = pubDate.replace(/\,/g,'');

						//append to the div
						ss.ACTIVITY_ARRAY['FACEBOOK'][ss.COUNTF] = new Array();
						ss.ACTIVITY_ARRAY['FACEBOOK'][ss.COUNTF][0] = '<a href="' + link + '" target="_blank">' + title + '</a>';
						ss.COUNTF++;
					});
					while(ss.COUNTF <= ss.MAXFEEDS)
					{
						
						ss.ACTIVITY_ARRAY['FACEBOOK'][ss.COUNTF]= new Array();
						ss.ACTIVITY_ARRAY['FACEBOOK'][ss.COUNTF][0] = ss.ACTIVITY_ARRAY['FACEBOOK'][ss.COUNTF][0];
						ss.COUNTF++;
						ss.AUX++;
						if(ss.AUX + ss.COUNTF == ss.MAXFEEDS){ss.AUX=0};
					}
					ss.FACEBOOK_FINISHED = 1;
				} else {
					ss.ERROR['FACEBOOK'] = 1;
					ss.FACEBOOK_FINISHED = 1;
				}
				
				
			});
		} else {
			ss.FACEBOOK_FINISHED = 1;
		}
		
	
		if (ss.GOOGLEPLUS_JSON!= '') {
			$.getJSON("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20json%20where%20url%3D%22"+encodeURIComponent(ss.GOOGLEPLUS_JSON)+"%22&format=json&callback=?", function(d) {
				//grab ever rss item from the json result request
				if (d.query.results.json) {
					$(d.query.results.json.items).each(function() {
						//if set up to be infinite or the limit is not reached, keep grabbing items
						var title = this.title;
						var link = this.url;
						//append to the div
						ss.ACTIVITY_ARRAY['GOOGLEPLUS'][ss.COUNTG] = new Array();
						ss.ACTIVITY_ARRAY['GOOGLEPLUS'][ss.COUNTG][0] = '<a href="' + link + '" target="_blank">' + title + '</a>';
						ss.COUNTG++;
					});
					while(ss.COUNTG <= ss.MAXFEEDS)
					{
						ss.ACTIVITY_ARRAY['GOOGLEPLUS'][ss.COUNTG] = new Array();
						ss.ACTIVITY_ARRAY['GOOGLEPLUS'][ss.COUNTG][0] =  ss.ACTIVITY_ARRAY['GOOGLEPLUS'][ss.AUX][0];
						ss.COUNTG++;
						ss.AUX++;
						if(ss.AUX + ss.COUNTG == ss.MAXFEEDS){ss.AUX = 0};
					}
					ss.GOOGLEPLUS_FINISHED = 1;
				} else {
					ss.ERROR['GOOGLEPLUS'] = 1;
					ss.GOOGLEPLUS_FINISHED = 1;
				}
				
				
			});
		} else {
			ss.GOOGLEPLUS_FINISHED = 1;
		}
		print_array(ss.ACTIVITY_ARRAY);	
	};
})(jQuery);

// Print the array! 
function print_array(obj) {
	$(document).ready(function(){	
	if ((ss.GOOGLEPLUS_FINISHED == 1) && (ss.TWITTER_FINISHED == 1) && (ss.FACEBOOK_FINISHED == 1)) {
		
			
		ss.CONTAINER.html("");
		var time = 1;
		for (j = 0; j < ss.MAXFEEDS; j++) {
			
			if(ss.ERROR['GOOGLEPLUS']==0){
				setTimeout('ss.CONTAINER.fadeOut(200)', 60*time);
				setTimeout('$("#barra_gp").removeClass("googleplus_inativo").addClass("googleplus_ativo");', 60*time);
				setTimeout('$("#barra_fb").removeClass("facebook_ativo").addClass("facebook_inativo");', 60*time);
				setTimeout('$("#barra_tw").removeClass("twitter_ativo").addClass("twitter_inativo");', 60*time);
				setTimeout('ss.CONTAINER.html( ss.ACTIVITY_ARRAY["GOOGLEPLUS"][j][0]).fadeIn(300)', 60*time);
				time= time + 100;
			}
			if(ss.ERROR['FACEBOOK']==0){
				setTimeout('ss.CONTAINER.fadeOut(200)', 60*time);
				setTimeout('$("#barra_gp").removeClass("googleplus_ativo").addClass("googleplus_inativo");', 60*time);
				setTimeout('$("#barra_fb").removeClass("facebook_inativo").addClass("facebook_ativo");', 60*time);
				setTimeout('$("#barra_tw").removeClass("twitter_ativo").addClass("twitter_inativo");', 60*time);
				setTimeout('ss.CONTAINER.fadeIn(300).html(ss.ACTIVITY_ARRAY["FACEBOOK"][j][0])', 60*time);
				time= time + 100;
			}
			if(ss.ERROR['TWITTER']==0){
				setTimeout('ss.CONTAINER.fadeOut(200)', 60*time);
				setTimeout('$("#barra_gp").removeClass("googleplus_ativo").addClass("googleplus_inativo");', 60*time);
				setTimeout('$("#barra_fb").removeClass("facebook_ativo").addClass("facebook_inativo");', 60*time);
				setTimeout('$("#barra_tw").removeClass("twitter_inativo").addClass("twitter_ativo");', 60*time);
				setTimeout('ss.CONTAINER.fadeIn(300).html(ss.ACTIVITY_ARRAY["TWITTER"][j][0])', 60*time);
				time= time + 100;
			}
		}
		setTimeout("print_array()", ss.MAXFEEDS*60*100*3 +1);
	} else {
		setTimeout("print_array()", 1000);
	}
});
}

// Multi-Dementional Array sort.
function by(i,dir) {
	return function(a,b){a = a[i];b = b[i];return a == b ? 0 : (a < b ? -1*dir : dir)}
}

