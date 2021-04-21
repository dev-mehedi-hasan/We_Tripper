<div class="form-group">
  <label class="col-sm-3 control-label" for="regular_price"><?php echo get_phrase('regular_price'); ?></label>
  <div class="col-sm-7">
    <div class="form-group">
      <input type="text" class="form-control" id = "regular_price" name="regular_price" style="width: 100%;" value="<?php echo $listing_details['regular_price']; ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-3 control-label" for="sale_price"><?php echo get_phrase('sale_price'); ?></label>
  <div class="col-sm-7">
    <div class="form-group">
      <textarea class="form-control" id="sale_price" name="sale_price" rows="4"><?php echo $listing_details['sale_price']; ?></textarea>
    </div>
  </div>
</div>