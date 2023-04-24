var $dialog = $('.dialog');
	$(document).on('keyup', function onDocumentKeyup(e) {
    if (e.keyCode === 27) {
        dialogclose.trigger('click');
    }
	});

	$('.dialoglink').on('click',function(){
		$dialog.addClass('opened');
		$('body').addClass('has-dialog');
	});
	var dialogmask = $('.dialog__mask'),
		dialogclose = $('.dialog__close');

	dialogmask.on('click',closeDialog);
	dialogclose.on('click',closeDialog);
	function closeDialog(){
		$dialog.removeClass('opened');
		$('body').removeClass('has-dialog');
		
	};