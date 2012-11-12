/* Author:

*/
jQuery(document).ready(function($){ 
	/* 	Clear  select option in MIC page (Search area) */
	$('#search_all').bind('click', function() { 
		if($(this).is(':checked')) { 
			$('#search_form select').val(0);
		}
	})
});