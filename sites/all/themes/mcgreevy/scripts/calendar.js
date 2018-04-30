function initBlockCalendarPopups(eventDates) {
	//init home calendar popup
	if($('#block-philorch-home-calendar-featured').get(0) || $('#block-philorch-sidebar-calendar').get(0)) {
		$('table.ui-datepicker-calendar a').live('hover',function(){
			var $link = $(this);
			if(!$link.find('div.tooltip').get(0)) {
				var calendarCookieYear = $.cookie('sidebar_calendar_year');
				var calendarCookieMonth = $.cookie('sidebar_calendar_month');
				if(calendarCookieYear && calendarCookieMonth) {
					var defaultDate = new Date(calendarCookieYear, calendarCookieMonth-1);
				}
				else {
					var defaultDate = new Date();
				}
				defaultDate.setMonth(defaultDate.getMonth(), 1);
				var year = defaultDate.getFullYear();
				//var month = addLeadingZero(defaultDate.getMonth()+1);
				//var day = addLeadingZero($(this).text());
				var month = defaultDate.getMonth()+1;
				var day = $(this).text();
				var date_str = year+'-'+month+'-'+day;
				
				var data = '';
				
				if(eventDates[date_str]) {
					$.each(eventDates[date_str][0], function(key, value){
						//value = value[0];
						console.log(value);
						var title = value.title;
						var venue = value.venue;
						var date = value.date.toString().split(' ');
						var date_array = date[0].toString().split('-');
						var date_string = date_array[1]+'/'+date_array[2]+'/'+date_array[0]+' '+date[1];
						var time_formatted = getFormattedTime(date_string);
						var body = value.body;
						if ( body == null ) {
							body = '';
						}
						else {
							body = '<p>'+body+'</p>';
						}
						data += '<div class="concert-item"><h2>'+title+'</h2>\
						<span class="concert-info"><strong>'+time_formatted+',</strong> '+venue+'</span>'+body+'</div>';
					});
				}
				var html = '<div class="tooltip"><div class="tip-center">'+data+'</div></div>';
				$('div.content > div.block-calendar > div.tooltip').remove();
				$('div.content > div.block-calendar').append(html);
			}
			return false;
		});
		$('table.ui-datepicker-calendar a').live('mouseout',function(){
			$('div.content > div.block-calendar > div.tooltip').css('display', 'none');
		});
	}
}

function getFormattedTime(date_string) {
	var myDate = new Date(date_string);
	var hours = myDate.getHours();
	var am = true;
	if (hours > 12) {
		am = false;
		hours -= 12;
	} else if (hours == 12) {
		am = false;
	} else if (hours == 0) {
		hours = 12;
	}
	
	var minutes = myDate.getMinutes();
	if(minutes==0) minutes = '00';
	
	var date_formatted = hours+':'+minutes+(am ? "am" : "pm");
	return date_formatted;
} 

function initCalendarPopups() {
	//init popups	
	var domain = 'http://'+window.location.host;
	$('#content div.view-fullcalendar div.fc-content a.fc-event').live('hover',function(event){
		if(event.type!='mouseenter') return;
		event.preventDefault();
		var $link = $(this);
		if(!$link.find('div.tooltip').get(0)) {
			var url = $link.attr('href');
			url = url.replace(domain, '');
			var $date_link = $('div.fullcalendar-content a[href="'+url+'"]');
			var $event_container = $date_link.parent().parent();
			var title = $event_container.find('h3').text();
			var venue = $event_container.find('span.venue').text();
			var time = $link.find('span.fc-event-time').text();
			var body = $event_container.find('div.body').html();
			var data = '<h2>'+title+'</h2>\
			<span class="concert-info"><strong>'+time+',</strong> '+venue+'</span>'+body;
			var html = '<div class="tooltip"><div class="tip-center">'+data+'</div></div>';
			$link.append(html);
		}
		
	});
}

//holder calendar date
function dateHolder(eventDates) {
	this.before = function (date) {
		date = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
		if (eventDates[date]) return [true, 'with_events'];
		return [false, 'without_events'];
	}
	this.select = function (dateText,ui) {
		var date_from = new Date(dateText);
		var date_from_str = date_from.getFullYear()+'-'+addLeadingZero((date_from.getMonth()+1))+'-'+addLeadingZero(date_from.getDate());
		
		var date_to = new Date(dateText);
		date_to.setDate(date_to.getDate()+1);
		var date_to_str = date_to.getFullYear()+'-'+addLeadingZero((date_to.getMonth()+1))+'-'+addLeadingZero(date_to.getDate());
		
		var query = 'from='+date_from_str+'&to='+date_to_str;
		var url = Drupal.settings.basePath+'concert/search?'+query;
		window.location = url;
	}
}

function addLeadingZero(dayOrMonth) {
	if(dayOrMonth<10) dayOrMonth = '0'+dayOrMonth.toString();
	return dayOrMonth;
}

function initFieldCollections() {
	if($('#content div.block-callouts').get(0)) {
		$('#content div.block-callouts > div.field-collection-view img').each(function (index, img) {
			var alt = $(img).attr('alt');
			if(alt) {
				$(img).after('<span>'+alt+'</span>');
			}
		});
	}
}

Drupal.behaviors.bef_live_filter = function(context) {
  // Only execute on first document ready
  if (context.nodeName == '#document') {
    // Hide the apply button.
    $('.views-exposed-form input:submit').hide();
  
    // When the change event fires, run the submit handler
    $('.views-exposed-form input').change(function(event) {
      $(this).parents('form').submit();
    }); 
  }
}