$('.card-header').on('click',function(){
	let cardBody = $(this).next();
	cardBody.slideToggle();
});

$('.card-header-icon').on('click', function () {
	$(this).toggleClass('rotate');
})




/***	 If use the Mobile browser By clicking the Expand Button, Your device will start a vibration   ****/

$('#expand').on('click',function (e) {
	e.preventDefault();
	$('.card-header-icon').addClass('rotate');
	$('.card-content').slideUp();
	navigator.vibrate([30]);
})


/***	this code below will start a Rhythm of Vibration when click on collaps button	***/

// $('#collapse').on('click',function (e) {
// 	e.preventDefault();
// 	$('.card-header-icon').removeClass('rotate');
// 	$('.card-content').slideDown();
// 	// navigator.vibrate([100]);
// 	navigator.vibrate([500, 250, 100, 250, 500, 250, 500, 250, 500, 250, 500]);
// })



/*
|------------------------------------------------------
|		Start:	This is for HTML5 Drag and Drop Api
|------------------------------------------------------
*/

	document.addEventListener('DOMContentLoaded', (event) => {

	var dragSrcEl = null;

	function handleDragStart(e) {
	this.style.opacity = '0.4';
	
	dragSrcEl = this;

	e.dataTransfer.effectAllowed = 'move';
	e.dataTransfer.setData('text/html', this.innerHTML);
	}

	function handleDragOver(e) {
	if (e.preventDefault) {
		e.preventDefault();
	}

	e.dataTransfer.dropEffect = 'move';
	
	return false;
	}

	function handleDragEnter(e) {
	this.classList.add('over');
	}

	function handleDragLeave(e) {
	this.classList.remove('over');
	}

	function handleDrop(e) {
	if (e.stopPropagation) {
		e.stopPropagation(); // stops the browser from redirecting.
	}
	
	if (dragSrcEl != this) {
		dragSrcEl.innerHTML = this.innerHTML;
		this.innerHTML = e.dataTransfer.getData('text/html');
	}
	
	return false;
	}

	function handleDragEnd(e) {
	this.style.opacity = '1';
	
	items.forEach(function (item) {
		item.classList.remove('over');
	});
	}


	let items = document.querySelectorAll('.container .box');
	items.forEach(function(item) {
	item.addEventListener('dragstart', handleDragStart, false);
	item.addEventListener('dragenter', handleDragEnter, false);
	item.addEventListener('dragover', handleDragOver, false);
	item.addEventListener('dragleave', handleDragLeave, false);
	item.addEventListener('drop', handleDrop, false);
	item.addEventListener('dragend', handleDragEnd, false);
	});
	});



/*
|------------------------------------------------------
|		End:	This is for HTML5 Drag and Drop Api
|------------------------------------------------------
*/
