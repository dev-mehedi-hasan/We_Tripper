<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-sm-6">
        <div class="tile-title tile-primary">
          <div class="icon">
            <i class="glyphicon glyphicon-leaf"></i>
          </div>
          <div class="title">
            <h3>
              <?php
              $this->db->select_sum('amount_paid');
              $total_spent_amount = $this->db->get_where('package_purchased_history', array('user_id' => $this->session->userdata('user_id')))->row_array();
              echo currency($total_spent_amount['amount_paid']);?>
            </h3>
            <p>
              <?php echo get_phrase('total_amount_spent'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="tile-title tile-red">
          <div class="icon">
            <i class="glyphicon glyphicon-leaf"></i>
          </div>
          <div class="title">
            <h3>
              <?php
              $wishlisted_items = $this->crud_model->get_user_wise_wishlist();
              echo count($wishlisted_items);
              ?>
            </h3>
            <p>
              <?php echo get_phrase('number_of_wishlisted_items'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="tile-title tile-blue">
          <div class="icon">
            <i class="glyphicon glyphicon-leaf"></i>
          </div>
          <div class="title">
            <h3>
              <?php
              $active_listing = $this->db->get_where('listing', array('user_id' => $this->session->userdata('user_id'), 'status' => 'active'))->result_array();
              echo count($active_listing);
              ?>
            </h3>
            <p>
                <?php echo get_phrase('number_of_active_listing'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="tile-title tile-aqua">
          <div class="icon">
            <i class="glyphicon glyphicon-leaf"></i>
          </div>
          <div class="title">
            <h3>
              <?php
              $pending_listing = $this->db->get_where('listing', array('user_id' => $this->session->userdata('user_id'), 'status' => 'pending'))->result_array();
              echo count($pending_listing);
              ?>
            </h3>
            <p>
                <?php echo get_phrase('number_of_pending_listing'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
