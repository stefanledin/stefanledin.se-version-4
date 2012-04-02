/* Author: Stefan Ledin

*/

var getTwitter = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=stefanledin&count=5&callback=?';
var output = '';

$.getJSON(getTwitter, function (tweets) {

	for (var i = 0; i < tweets.length; i++) {
		
		var tweet = tweets[i].text;

		var regexpUrl = /(http|s:[^\s]+)/g;

		var regexpUsername = /(\s)(@)(\w+)/g;
			
		tweet = tweet.replace(regexpUrl, '<a href="$1">$1</a>').replace(regexpUsername, '<a href="http://twitter.com/$3">$2$3</a>');
		
		output += '<li>'+tweet+'</li>';

	}
	document.getElementById('tweets').
		innerHTML=output;

});






















