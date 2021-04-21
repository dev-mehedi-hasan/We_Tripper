<?php
$countries  = $this->db->get('country')->result_array();
$categories = $this->db->get('category')->result_array();
?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('add_listing_form'); ?>
				</div>
			</div>
			<div class="panel-body">
				<form action="<?php echo site_url('admin/listings/add'); ?>" method="post" enctype="multipart/form-data" role="form" class="form-horizontal form-groups-bordered listing_add_form">
				<div class="col-md-12">
					<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
						<li class="active">
							<a href="#first" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-home"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('basic'); ?></span>
							</a>
						</li>
						<li>
							<a href="#second" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-location"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('location'); ?></span>
							</a>
						</li>
						<li>
							<a href="#third" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-list"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('amenities'); ?></span>
							</a>
						</li>
						<li>
							<a href="#fourth" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-video"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('media'); ?></span>
							</a>
						</li>
						<li>
							<a href="#fifth" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs"><?php echo 'SEO'; ?></span>
							</a>
						</li>
						<li>
							<a href="#sixth" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('schedule'); ?></span>
							</a>
						</li>
						<li>
							<a href="#seventh" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-link"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('contact'); ?></span>
							</a>
						</li>
						<li>
							<a href="#eighth" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('type'); ?></span>
							</a>
						</li>
						<li>
							<a href="#ninth" data-toggle="tab">
								<span class="visible-xs"><i class="fa fa-usd"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('price'); ?></span>
							</a>
						</li>
						<li>
							<a href="#ten" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-check"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('finish'); ?></span>
							</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="first">
							<?php include 'add_listing_basic.php'; ?>
						</div>
						<div class="tab-pane" id="second">
							<?php include 'add_listing_location.php'; ?>
						</div>
						<div class="tab-pane" id="third">
							<?php include 'add_listing_amenity.php'; ?>
						</div>

						<div class="tab-pane" id="fourth">
							<?php include 'add_listing_media.php'; ?>
						</div>

						<div class="tab-pane" id="fifth">
							<?php include 'add_listing_seo.php'; ?>
						</div>
						<div class="tab-pane" id="sixth">
							<?php include 'add_listing_schedule.php'; ?>
						</div>

						<div class="tab-pane" id="seventh">
							<?php include 'add_listing_contact.php'; ?>
						</div>

						<div class="tab-pane" id="eighth">
							<?php include 'add_listing_type.php'; ?>
						</div>
						<div class="tab-pane" id="ninth">
							<?php include 'add_listing_price.php'; ?>
						</div>
						<div class="tab-pane" id="ten">
							<?php include 'add_listing_finish.php'; ?>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div><!-- end col-->
</div>
<script type="text/javascript">
function getCityList(country_id) {
	$.ajax({
		type : 'POST',
		url : '<?php echo site_url('home/get_city_list_by_country_id'); ?>',
		data : {country_id : country_id},
		success : function(response) {
			$('#city_id').html(response);
		}
	});
}
var blank_category = $('#blank_category_field').html();
var blank_photo_uploader = $('#blank_photo_uploader').html();
// var blank_hotel_room_specification_div = $('#blank_hotel_room_specification_div').html();
// var blank_flights_cabin_specification_div = $('#blank_flights_cabin_specification_div').html();
var listing_type_value = $('.listing-type-radio').val();

$(document).ready(function() {
	$('#blank_category_field').hide();
	$('#blank_photo_uploader').hide();
	// $('#blank_hotel_room_specification_div').hide();
	// $('#blank_flights_cabin_specification_div').hide();
});

// function appendHotelRoomSpecification() {

// 	jQuery('#hotel_room_specification_div').append(blank_hotel_room_specification_div);
// 	let selector = jQuery('#hotel_room_specification_div .hotel_room_specification_div');

// 	let rand = Math.random().toString(36).slice(3);

// 	$(selector[selector.length - 1]).find('label.btn').attr('for', 'room-image-' + rand );
// 	$(selector[selector.length - 1]).find('input.image-upload').attr('id', 'room-image-' + rand );
// 	$(".bootstrap-tag-input").tagsinput('items');
// 	initImagePreviewer();
// }

// function removeHotelRoomSpecification(elem) {
// 	jQuery(elem).closest('.hotel_room_specification_div').remove();
// 	$(".bootstrap-tag-input").tagsinput('items');
// }

// function appendFlightsCabinSpecification() {

// jQuery('#flights_cabin_specification_div').append(blank_flights_cabin_specification_div);
// let selector = jQuery('#flights_cabin_specification_div .flights_cabin_specification_div');

// let rand = Math.random().toString(36).slice(3);

// $(selector[selector.length - 1]).find('label.btn').attr('for', 'cabin-image-' + rand );
// $(selector[selector.length - 1]).find('input.image-upload').attr('id', 'cabin-image-' + rand );
// $(".bootstrap-tag-input").tagsinput('items');
// initImagePreviewer();
// }

// function removeFlightsCabinSpecification(elem) {
// jQuery(elem).closest('.flights_cabin_specification_div').remove();
// $(".bootstrap-tag-input").tagsinput('items');
// }


function appendCategory() {
	jQuery('#category_area').append(blank_category);
}

function removeCategory(categoryElem) {
	jQuery(categoryElem).closest('.appendedCategoryFields').remove();
}

function appendPhotoUploader() {
	jQuery('#photos_area').append(blank_photo_uploader);
}

function removePhotoUploader(photoElem) {
	jQuery(photoElem).closest('.appendedPhotoUploader').remove();
}

// function showListingTypeForm(listing_type) {
// 	listing_type_value = listing_type;
// 	if (listing_type === "hotel") {
// 		$('#hotel_room_specification_parent_div').show();
// 		$('#flights_cabin_specification_parent_div').hide();
// 		$('#demo-btn').html('<i class="mdi mdi-eye"></i> <?php echo get_phrase('preview_rooms'); ?>');
// 	}
// 	else if (listing_type === "flights") {
// 		$('#flights_cabin_specification_parent_div').show();
// 		$('#hotel_room_specification_parent_div').hide();
// 		$('#demo-btn').html('<i class="mdi mdi-eye"></i> <?php echo get_phrase('preview_cabin'); ?>');
// 	}else {
// 		$('#hotel_room_specification_parent_div').hide();
// 		$('#flights_cabin_specification_parent_div').hide();
// 		$('#demo-btn').html('<i class="mdi mdi-eye"></i> <?php echo get_phrase('no_preview_available'); ?>');
// 	}
// }

// This fucntion checks the minimul required fields of listing form
function checkMinimumFieldRequired() {
	var title = $('#title').val();
	var defaultCategory = $('#category_default').val();
	var latitude = $('#latitude').val();
	var longitude = $('#longitude').val();
	if (title === "" || defaultCategory === "" || latitude === "" || longitude === "") {
		error_notify('<?php echo get_phrase('listing_title').', '.get_phrase('listing_category').', '.get_phrase('latitude').', '.get_phrase('longitude').' '.get_phrase('can_not_be_empty'); ?>');
	}else {
		$('.listing_add_form').submit();
	}
}

// Show Listing Type Wise Demo
// function showListingTypeWiseDemo(param) {
// 	if (listing_type_value === 'hotel') {
// 		showAjaxModal('<?php echo base_url();?>modal/popup/preview_of_details/hotel_room', '<?php echo get_phrase('preview'); ?>');
// 	}
// 	if (listing_type_value === 'flights') {
// 		showAjaxModal('<?php echo base_url();?>modal/popup/preview_of_details/flights_cabin', '<?php echo get_phrase('preview'); ?>');
// 	}
// }
</script>

<script>
	function service_time(){
		var starting_time = $('#starting_time').val();
		var ending_time = $('#starting_time').val();
		if(starting_time != '' && ending_time != ''){
			$("#ending_time").attr("min", starting_time);
			$("#ending_time").attr("max", "24:00");
		}
	}

	// function service_time_min(){
	// 	var ending_time   = $('#ending_time').val();
	// 	if(ending_time != ''){
	// 		$("#ending_time").attr("min", "1");
	// 		$("#ending_time").attr("max", ending_time);
	// 	}
	// }
</script>
