<div class="row">
  <div class="col-sm-offset-3 col-sm-3">
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="hotel" name="listing_type" class="custom-control-input listing-type-radio" value="hotel" onclick="showListingTypeForm('hotel')" checked>
        <label class="custom-control-label" for="hotel"><i class="fa fa-hotel" style="color: #636363;"></i> <?php echo get_phrase('hotel'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="flights" name="listing_type" class="custom-control-input listing-type-radio" value="flights" onclick="showListingTypeForm('flights')" checked>
        <label class="custom-control-label" for="flights"><i class="fa fa-plane" style="color: #636363;"></i> <?php echo get_phrase('flights'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="ship_ticket" name="listing_type" class="custom-control-input listing-type-radio" value="ship_ticket" onclick="showListingTypeForm('ship_ticket')" checked>
        <label class="custom-control-label" for="ship_ticket"><i class="fa fa-ship" style="color: #636363;"></i> <?php echo get_phrase('Ship Ticket'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="tour_package" name="listing_type" class="custom-control-input listing-type-radio" value="tour_package" onclick="showListingTypeForm('tour_package')" checked>
        <label class="custom-control-label" for="tour_package"><i class="fa fa-globe" style="color: #636363;"></i> <?php echo get_phrase('Tour Package'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="car_rental" name="listing_type" class="custom-control-input listing-type-radio" value="car_rental" onclick="showListingTypeForm('car_rental')" checked>
        <label class="custom-control-label" for="car_rental"><i class="fa fa-car" style="color: #636363;"></i> <?php echo get_phrase('Car Rental'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="visa" name="listing_type" class="custom-control-input listing-type-radio" value="visa" onclick="showListingTypeForm('visa')" checked>
        <label class="custom-control-label" for="visa"><i class="fa fa-passport" style="color: #636363;"></i> <?php echo get_phrase('Visa'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="bus_ticket" name="listing_type" class="custom-control-input listing-type-radio" value="bus_ticket" onclick="showListingTypeForm('bus_ticket')" checked>
        <label class="custom-control-label" for="bus_ticket"><i class="fa fa-bus-alt" style="color: #636363;"></i> <?php echo get_phrase('Bus Ticket'); ?></label>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="custom-control custom-radio">
        <input type="radio" id="local_car" name="listing_type" class="custom-control-input listing-type-radio" value="local_car" onclick="showListingTypeForm('local_car')" checked>
        <label class="custom-control-label" for="local_car"><i class="fa fa-taxi" style="color: #636363;"></i> <?php echo get_phrase('Local Car'); ?></label>
      </div>
    </div>
  </div>

  <div class="col-sm-3 text-left">
    <a href="#" id = "demo-btn" class="btn btn-primary mt-4" onclick="showListingTypeWiseDemo($('.listing-type-radio').val())"> <i class="mdi mdi-eye"></i> <?php echo get_phrase('no_preview_available'); ?> </a>
  </div>
</div>


<?php include 'hotel_room_specification_form.php'; ?>
<?php include 'flights_cabin_specification_form.php'; ?>
<?php include 'ship_cabin_specification_form.php'; ?>
