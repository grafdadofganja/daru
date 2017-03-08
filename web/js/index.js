;(function(){

	// Добавление всплывающей надписи на картинке

	console.log("Init idex.js");
	var pers = $(".perslink");

	var panel = document.createElement('img');
	panel.className = "daru-panel";
	panel.src = "/daru/web/img/daru-img.png"


	pers.on('mouseover', function(event) {
		var target = event.target;

		//console.log(target.tagName);
		
		if (target.tagName === 'IMG') {
			console.log("target");
			//target.appendChild(panel);
			$(target).after(panel);
		}

	});

	pers.on('', function(event) {

	});

	// Увеличение картинки

	var main = $(".main-page");	

	main.on('click', function(event) {
		var target = event.target;

		//console.log(target.tagName);
		
		if (target.className === 'map-img') {
			console.log("target");

			var resize = document.createElement('div');
			resize.className = "resize";
			var img = document.createElement('img');
			img.src = target.src;
			resize.appendChild(img);


			$('body').append(resize);

			$(resize).on('click', function(){
				$(resize).remove();
			});
			//$(target).after(panel);
		}

	});

}())