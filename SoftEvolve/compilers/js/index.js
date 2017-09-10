var result = document.getElementById('result'),
		htmltext = document.getElementById('html'),
		csstext = document.getElementById('css'),
		jstext = document.getElementById('js');
function display(){
	var html = htmltext.value,
			css = csstext.value,
			js = jstext.value,
			doc = '<!DOCTYPE html><html><head><style>'+css+'</style><script>'+js+'</script></head><body>'+html+'</body></html>';
	result.setAttribute('srcdoc', doc);
	return {
		'h': html,
		'c': css,
		'j': js,
	};
}
function save(){
	var name = prompt('Please name your document.');
	if(name != ''){
		localStorage.setItem(name, JSON.stringify( display() ) );
		alert('Document saved as '+name+'. If you wish to retrieve it, please select Open and type in the file name.');
	}else{
		alert('Invalid name.');
	}
}
/*Created by Avnish Singh Jat*/
function openit(){
	var name = prompt('Please name the file you wish to open.');
	if(name != ''){
		var file = localStorage.getItem(name);
		if(file != undefined){
			alert('File retrieved.');
			var parsedFile = JSON.parse(file);
			htmltext.value = parsedFile.h;
			csstext.value = parsedFile.c;
			jstext.value = parsedFile.j;
		}else{
			alert('File does not exist.');
		}
	}else{
		alert('Invalid name.');
	}
}
function deleteit(){
	var name = prompt('What do you want to delete?');
	if(name != ''){
		if(localStorage.getItem(name) != undefined){
			localStorage.setItem(name, undefined);
			alert('Deleted!');
		}else{
			alert('File does not exist.');
		}
	}else{
		alert('Invalid name.');
	}
}
htmltext.addEventListener('keydown', function(){
	display();
});
/*Created by Avnish Singh Jat*/