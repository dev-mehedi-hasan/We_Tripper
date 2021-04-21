<?php
$listing_details = $this->crud_model->get_listings($listing_id)->row_array();
$time_configuration_details = $this->crud_model->get_time_configuration_by_listing_id($listing_id)->row_array();
$social_links = json_decode($listing_details['social'], true);
$countries  = $this->db->get('country')->result_array();
$categories = $this->db->get('category')->result_array();
$listing_amenities = json_decode($listing_details['amenities'], false);
$listing_categories = json_decode($listing_details['categories'], false);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('update').': '.$listing_details['name']; ?>
				</div>
			</div>
			<div class="panel-body">
				<form action="<?php echo site_url('admin/listings/edit/'.$listing_id); ?>" method="post" enctype="multipart/form-data" role="form" class="form-horizontal form-groups-bordered listing_edit_form">
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
								<span class="visible-xs"><i class="entypo-user"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('location'); ?></span>
							</a>
						</li>
						<li>
							<a href="#third" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-mail"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('amenities'); ?></span>
							</a>
						</li>
						<li>
							<a href="#fourth" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
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
								<span class="visible-xs"><i class="entypo-cog"></i></span>
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
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('price'); ?></span>
							</a>
						</li>
						<li>
						<a href="#ten" data-toggle="tab">
							<span class="visible-xs"><i class="entypo-cog"></i></span>
							<span class="hidden-xs"><?php echo get_phrase('claim'); ?></span>
						</a>
						</li>
						<li>
							<a href="#eleven" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs"><?php echo get_phrase('finish'); ?></span>
							</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="first">
							<?php include 'edit_listing_basic.php'; ?>
						</div>
						<div class="tab-pane" id="second">
							<?php include 'edit_listing_location.php'; ?>
						</div>
						<div class="tab-pane" id="third">
							<?php include 'edit_listing_amenity.php'; ?>
						</div>

						<div class="tab-pane" id="fourth">
							<?php include 'edit_listing_media.php'; ?>
						</div>

						<div class="tab-pane" id="fifth">
							<?php include 'edit_listing_seo.php'; ?>
						</div>
						<div class="tab-pane" id="sixth">
							<?php include 'edit_listing_schedule.php'; ?>
						</div>

						<div class="tab-pane" id="seventh">
							<?php include 'edit_listing_contact.php'; ?>
						</div>

						<div class="tab-pane" id="eighth">
							<?php include 'edit_listing_type.php'; ?>
						</div>
						<div class="tab-pane" id="ninth">
							<?php include 'edit_listing_price.php'; ?>
						</div>
						<div class="tab-pane" id="ten">
							<?php include 'edit_claim_status.php'; ?>
						</div>
						<div class="tab-pane" id="eleven">
							<?php include 'edit_listing_finish.php'; ?>
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
    showListingTypeForm('<?php echo $listing_details['listing_type']; ?>');
  });

//   function appendHotelRoomSpecification() {

//     jQuery('#hotel_room_specification_div').append(blank_hotel_room_specification_div);
//     let selector = jQuery('#hotel_room_specification_div .hotel_room_specification_div');

//     let rand = Math.random().toString(36).slice(3);

//     $(selector[selector.length - 1]).find('label.btn').attr('for', 'room-image-' + rand );
//     $(selector[selector.length - 1]).find('input.image-upload').attr('id', 'room-image-' + rand );
//     $(".bootstrap-tag-input").tagsinput('items');
//     initImagePreviewer();
//   }

//   function removeHotelRoomSpecification(elem) {
//     jQuery(elem).closest('.hotel_room_specification_div').remove();
//     $(".bootstrap-tag-input").tagsinput('items');
//     removeFromDatabase('hotel', elem.id);
//   }

//   function appendFlightsCabinSpecification() {

// 	jQuery('#flights_cabin_specification_div').append(blank_flights_cabin_specification_div);
// 	let selector = jQuery('#flights_cabin_specification_div .flights_cabin_specification_div');

// 	let rand = Math.random().toString(36).slice(3);

// 	$(selector[selector.length - 1]).find('label.btn').attr('for', 'cabin-image-' + rand );
// 	$(selector[selector.length - 1]).find('input.image-upload').attr('id', 'cabin-image-' + rand );
// 	$(".bootstrap-tag-input").tagsinput('items');
// 	initImagePreviewer();
// 	}

// 	function removeFlightsCabinSpecification(elem) {
// 	jQuery(elem).closest('.flights_cabin_specification_div').remove();
// 	$(".bootstrap-tag-input").tagsinput('items');
// 	}


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

//   function showListingTypeForm(listing_type) {
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

  function removeFromDatabase(type, id) {
    $.ajax({
      type : 'POST',
      url : '<?php echo site_url('admin/remove_listing_inner_feature'); ?>',
      data : {type : type, id : id},
      success : function(response) {
        success_notify('<?php echo get_phrase('removed_successfully'); ?>');
      }
    });
  }

  // This fucntion checks the minimul required fields of listing form
  function checkMinimumFieldRequired() {
  	var title = $('#title').val();
  	var defaultCategory = $('#category_default').val();
  	var latitude = $('#latitude').val();
  	var longitude = $('#longitude').val();
  	if (title === "" || defaultCategory === "" || latitude === "" || longitude === "") {
  		error_notify('<?php echo get_phrase('listing_title').', '.get_phrase('listing_category').', '.get_phrase('latitude').', '.get_phrase('longitude').' '.get_phrase('can_not_be_empty'); ?>');
  	}else {
  		$('.listing_edit_form').submit();
  	}
  }

  // Show Listing Type Wise Demo
//   function showListingTypeWiseDemo(param) {
// 	if (listing_type_value === 'hotel') {
// 		showAjaxModal('<?php echo base_url();?>modal/popup/preview_of_details/hotel_room', '<?php echo get_phrase('preview'); ?>');
// 	}
// 	if (listing_type_value === 'flights') {
// 		showAjaxModal('<?php echo base_url();?>modal/popup/preview_of_details/flights_cabin', '<?php echo get_phrase('preview'); ?>');
// 	}
// }
</script>
