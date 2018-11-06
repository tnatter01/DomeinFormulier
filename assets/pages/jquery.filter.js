/**
* Theme: Adminox Admin Dashboard
* Author: Coderthemes
* Foo table
*/

$(window).on('load', function() {
	
	// Filtering
	// -----------------------------------------------------------------
	var filtering = $('#datatable-buttons');
	filtering.footable().on('footable_filtering', function (e) {
		var selected = $('#filter-project').find(':selected').val();
		e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
		e.clear = !e.filter;
	});

	// Filter status
	$('#filter-project').change(function (e) {
		e.preventDefault();
		filtering.trigger('footable_filtering', {filter: $(this).val()});
	});
	
	
	
});
