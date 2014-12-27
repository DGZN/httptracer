$(document).ready(function()
{
	baseURL = 'http://198.58.113.159/'

	endpointId = $('#endpointID').val()

	$('[data-toggle=offcanvas]').click(function() {

  		$('.row-offcanvas').toggleClass('active');

	});

	$('.btn-toggle').click(function() {
  		
  		$(this).find('.btn').toggleClass('active').toggleClass('btn-default').toggleClass('btn-primary');

	});

	traceTable = $('#endpointTable').DataTable({

		'ajax': baseURL + 'traces/' + endpointId

	});


	$('#endpointTable tbody').on( 'click', 'tr', function () {

	    if ( $(this).hasClass('selected') ) {
	        $(this).removeClass('selected');
	    }
	    else {
	        traceTable.$('tr.selected').removeClass('selected');
	        $(this).addClass('selected');
        }

        var traceTime = $('td', this).eq(0).text();
        var traceTimestamp = $('td', this).eq(2).text()

        var traceID = endpointId + '-' + traceTimestamp + ':' + traceTime

    });


	$(document).keydown(function(e) {
	    
	    if ( e.which == 68 ) {

	        var selected = $('#endpointTable tbody tr.selected');

	        var traceTime = $('td', selected).eq(0).text();
	        var traceTimestamp = $('td', selected).eq(2).text()

	        var traceId = endpointId + '-' + traceTimestamp + ':' + traceTime

	        $.ajax({
				type: 'DELETE',
				url: baseURL + 'traces/' + traceId,
				success: function(response){
					updateEndpointStats(endpointId)
					traceTable.row('.selected').remove().draw( false );
				}
			});

	    }

	});
 
    $('#button').click( function () {

        table.row('.selected').remove().draw( false );

    } );

	
	traceTable.on( 'draw', function () {
	    
	    setupDeleteTraceLisener()
	    
	} );

	setupDeleteTraceLisener()

	$('#endpointTable').fadeIn(500)

	function setupDeleteTraceLisener(){

		$('.deleteTrace').off()
		$('.deleteTrace').on("click", function(e){

			var traceId = $(this).data('trace-id')

			$.ajax({
				type: 'DELETE',
				url: baseURL + 'traces/' + traceId,
				success: function(response){
					updateEndpointStats(endpointId)
				}
			});
		
		});

	}

	function updateEndpointStats(endpointId){

		$.ajax({
			type: 'GET',
			url: baseURL + 'traces/endpoint/' + endpointId,
			success: function(response){

				$('#traceMax').html( response.trace.max )
				$('#traceAvg').html( response.trace.avg )
				$('#traceMin').html( response.trace.min )
			}
		});

	}

	// setTimeout(function(){

	// 	updateEndpointStats(endpointId)

	// },100)

	

});