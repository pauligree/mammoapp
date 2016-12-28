$( document ).ready(function() {

	var dialog = document.querySelector('dialog');
	var showDialogButton = document.querySelector('.show-dialog');
	//console.log(showDialogButton);
	if(showDialogButton){
		if (! dialog.showModal) {
			dialogPolyfill.registerDialog(dialog);
		}
		showDialogButton.addEventListener('click', function() {
			dialog.showModal();
		});
		dialog.querySelector('.close').addEventListener('click', function() {
			dialog.close();
		});
	}

	$('.indietro').click(function (event) {
		event.preventDefault();
		window.history.go(-1);
	});
});


/*  esempi
    $('#show-info').click(function () {
        showDialog({
            title: 'Information',
            text: lorem
        })
    });
    $('#show-action').click(function () {
        showDialog({
            title: 'Action',
            text: 'This dialog can be closed by pressing ESC or clicking outside of the dialog.<br/>Pressing "YAY" will fire the configured action.',
            negative: {
                title: 'Nope'
            },
            positive: {
                title: 'Yay',
                onClick: function (e) {
                    alert('Action performed!');
                }
            }
        });
    });
    $('#show-not-cancelable').click(function () {
        showDialog({
            title: 'Not cancelable',
            text: 'This dialog can only be closed by using one of the buttons.',
            negative: {
                title: 'Nope'
            },
            positive: {
                title: 'Yay'
            },
            cancelable: false
        });
    });
    $('#show-loading').click(function () {
        showLoading();
        setTimeout(function () {
            hideLoading();
        }, 3000);
    });

*/