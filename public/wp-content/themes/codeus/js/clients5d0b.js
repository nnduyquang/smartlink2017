(function($) {
	$(function() {
		$('.block.clients .carousel').each(function() {
			var $self = $(this);
			var $carousel = $('> ul', this).eq(0);
			var $temp = $('<div/>');
			$('li',$carousel).appendTo($temp);$carousel.css('margin', 0).html('');$('li',$temp).appendTo($carousel).css('margin-bottom', 0);
			var navigation = $('<div class="navigation"/>').insertAfter($self);
			$('<a href="javascript:void(0);" class="prev">Prev</a>')
				.appendTo(navigation);
			$('<a href="javascript:void(0);" class="next">Next</a>')
				.appendTo(navigation);
			$carousel.carouFredSel({
				width: '100%',
				circular: true,
				infinity: true,
				align: 'center',
				auto: false,
				prev: $('.prev', navigation),
				next: $('.next', navigation)
			});
		});
	});
})(jQuery);

(function($) {
	$(document).ready(function() {
		$('div.clients:not(.block)').each(function() {
			var clients = this;
			
			var count = $('ul.list li', clients).size();
			var count_per_page = parseInt($(clients).data('count'));
			if (count_per_page > 0)
				var pages_count = Math.ceil(count / count_per_page);
			else
				var pages_count = 1;
			var current_page = 1;
			$(clients).data('current-page', current_page);
			
			if (pages_count > 1) {
				var paginator = '<div class="bottom pagination">';
				paginator += '<a class="prev" href="#Prev" style="display: none;">Prev</a>';
				for (var i = 0; i < pages_count; i++)
					paginator += '<a href="#' + (i + 1) + '">' + (i + 1) +'</a>';
				paginator += '<a class="next" href="#Next">Next</a>';
				paginator += '</div>';
				$('ul.list', clients).after(paginator);
				
				$(clients).parent().find('.pagination a[href="#' + current_page + '"]').addClass('current');
				
				$(clients).parent().find('.pagination a').click(function() {
					var current_page = parseInt($(clients).data('current-page'));
					var next_page = $(this).attr('href').replace('#', '');
					if (current_page == next_page)
						return false;
					if (next_page == 'Next')
						next_page = current_page + 1;
					if (next_page == 'Prev')
						next_page = current_page - 1;
					next_page = parseInt(next_page);
					if (next_page > pages_count)
						next_page = pages_count;
					if (next_page < 1)
						next_page = 1;
					$(clients).data('current-page', next_page);
					$(this).siblings().removeClass('current');
					$(this).parent().find('a[href="#' + next_page + '"]').addClass('current');
					if (next_page > 1)
						$(this).parent().find('a[href="#Prev"]').show();
					else
						$(this).parent().find('a[href="#Prev"]').hide();
					if (next_page < pages_count)
						$(this).parent().find('a[href="#Next"]').show();
					else
						$(this).parent().find('a[href="#Next"]').hide();
					
					$('ul.list', clients).animate({opacity: 0}, 300, function() {
						$(this).find('li.paginator-page-' + current_page).hide();
						$(this).find('li.paginator-page-' + next_page).css({
							display: 'inline-block',
							opacity: 1
						});
						$('ul.filter li.active', clients).removeClass('active');
						$('ul.filter li:first', clients).addClass('active');
						$('ul.filter li', clients).each(function() {
							var filter = $(this).attr('data-filter').replace('paginator-page-' + current_page, '');
							filter += 'paginator-page-' + next_page;
							$(this).attr('data-filter', filter);
						});
						$('ul.list', clients).animate({opacity: 1}, 300);
					});
					
					return false;
				});
			}
			
			$('ul.filter li:first', clients).addClass('active');
			$('ul.filter li', clients).each(function() {
				var filter = $(this).attr('data-filter') || '';
				filter += ' paginator-page-' + current_page;
				$(this).attr('data-filter', filter);
			});
			
			$('ul.list li', clients).each(function(i) {
				if (count_per_page > 0)
					var page = Math.ceil((i+1) / count_per_page);
				else
					var page = 1;
				$(this).addClass('paginator-page-' + page);
			});
			
			$(clients).data('is_mix_animating', 0);
			$('ul.list', clients).mixitup({
				filterSelector: '.mix-filter',
				targetSelector: 'li',
				effects: ['fade'],
				showOnLoad: 'paginator-page-' + current_page,
				filterLogic: 'and',
				onMixStart: function() {
					$(clients).data('is_mix_animating', 1);
				},
				onMixEnd: function() {
					$(clients).data('is_mix_animating', 0);
				}
			});
		});

		jQuery.fn.sortEls = function sortEls(attr) {
			$('> *['+attr+']', this).sort(dec_sort).appendTo(this);
			function dec_sort(a, b){ return parseInt($(b).attr(attr)) < parseInt($(a).attr(attr)) ? 1 : -1; }
		}

	});

})(jQuery);