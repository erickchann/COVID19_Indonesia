function showMenu() {
	const menu = document.getElementById('menu-menu');
	menu.classList.toggle('show');
}

(function($) {

	setTimeout(() => {
		$('.transition .a').addClass('out');
		$('.transition .b').addClass('out');
	}, 500);

	$('a').click((e) => {
		e.preventDefault();

		let url = e.target.href;

		$.ajax({
			url: url,
			beforeSend: () => {
				$('.transition .a').removeClass('out');
				$('.transition .b').removeClass('out');
			}
		}).done((res) => {
			history.pushState(null, null, url);
			document.open();
			document.write(res);
			document.close();
		});
	});



})(jQuery)