<div id="flights_cabin_specification_parent_div" style="display: none; padding-top: 10px;">
  <div id = "flights_cabin_specification_div">
    <div class="flights_cabin_specification_div">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-primary" data-collapsed="0">
            <div class="panel-body">
              <h5 class="card-title mb-0"><?php echo get_phrase('flights_cabin_specification'); ?></h5>
              <div class="collapse show" style="padding-top: 10px;">
                <div class="row no-margin">
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label for="cabin_name"><?php echo get_phrase('cabin_name'); ?></label>
                      <input type="text" name="cabin_name[]" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label for="cabin_description"><?php echo get_phrase('cabin_description'); ?></label>
                      <textarea name="cabin_description[]" class="form-control" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="cabin_price"><?php echo get_phrase('cabin_price').' ('.currency_code_and_symbol().')'; ?> </label>
                      <input type="text" name="cabin_price[]" class="form-control" />
                    </div>

                    <div class="form-group">
                      <label for="flights_cabin_amenities"><?php echo get_phrase('flights_cabin_amenities'); ?> <small>(<?php echo get_phrase('press_Enter_after_entering_every_amenity'); ?>)</small></label>
                      <input type="text" class="form-control bootstrap-tag-input" name="flights_cabin_amenities[]" data-role="tagsinput"/>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="wrapper-image-preview">
                      <div class="box">
                        <div class="js--image-preview"></div>
                        <div class="upload-options">
                          <label for="flights-cabin-1" class="btn"> <i class="entypo-camera"></i> <?php echo get_phrase('upload_cabin_image'); ?> <small>(800 X 533)</small> </label>
                          <input id="flights-cabin-1" style="visibility:hidden;" type="file" class="image-upload" name="cabin_image[]" accept="image/*">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end card-->
      </div>
    </div>
  </div>
  <div class="row text-center">
    <button type="button" class="btn btn-primary" name="button" onclick="appendFlightsCabinSpecification()"> <i class="mdi mdi-plus"></i> <?php echo get_phrase('add_new_cabin'); ?></button>
  </div>
</div>


<div id = "blank_flights_cabin_specification_div">
  <div class="flights_cabin_specification_div">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary" data-collapsed="0">
          <div class="panel-body">
            <h5 class="card-title mb-0"><?php echo get_phrase('flights_cabin_specification'); ?>
              <button type="button" class="btn btn-danger btn-sm btn-rounded alignToTitleOnPreview" name="button" onclick="removeFlightsCabinSpecification(this)"><?php echo get_phrase('remove_this_room'); ?></button>
            </h5>
            <div class="collapse show" style="padding-top: 10px;">
              <div class="row no-margin">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="cabin_name"><?php echo get_phrase('cabin_name'); ?></label>
                    <input type="text" name="cabin_name[]" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="cabin_description"><?php echo get_phrase('cabin_description'); ?></label>
                    <textarea name="cabin_description[]" class="form-control" rows="5"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="cabin_price"><?php echo get_phrase('cabin_price').' ('.currency_code_and_symbol().')'; ?></label>
                    <input type="text" name="cabin_price[]" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label for="amenities"><?php echo get_phrase('amenities'); ?> <small>(<?php echo get_phrase('press_Enter_after_entering_every_amenity'); ?>)</small> </label>
                    <input type="text" class="form-control bootstrap-tag-input" name="flights_cabin_amenities[]" data-role="tagsinput"/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="wrapper-image-preview">
                    <div class="box">
                      <div class="js--image-preview"></div>
                      <div class="upload-options">
                        <label for="flights-cabin-1" class="btn"> <i class="entypo-camera"></i> <?php echo get_phrase('upload_cabin_image'); ?> <small> (800 X 533) </small> </label>
                        <input id="flights-cabin-1" style="visibility:hidden;" type="file" class="image-upload" name="cabin_image[]" accept="image/*">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end card-->
    </div>
  </div>
</div>
