/* Author: 

*/

var twitter = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=stefanledin&count=5&callback=?';
		
var json = $.getJSON(twitter, function (tweets) {
	for (var i = 0; i < tweets.length; i++) {
		document.createTextNode(tweets[i].text);
		document.getElementById('tweets').appendChild(document.createElement('li')).appendChild(document.createTextNode(tweets[i].text));
	}
});






















