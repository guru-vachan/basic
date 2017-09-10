function changeWebsite(loc){
	var sources = document.getElementsByTagName('iframe');
	var srcArray = [];
	for(var i=0; i < sources.length; i++){
		srcArray.push(sources[i].src = loc);
	}
}
