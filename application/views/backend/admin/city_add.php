<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('add_new_city'); ?>
				</div>
			</div>
			<div class="panel-body">

				<form action="<?php echo site_url('admin/cities/add'); ?>" method="post" enctype="multipart/form-data" role="form" class="form-horizontal form-groups-bordered">


					<div class="form-group">
						<label for="country_id" class="col-sm-3 control-label"><?php echo get_phrase('country'); ?></label>

						<div class="col-sm-7">
							<select name="country_id" id="country_id" class="select2" data-allow-clear="true" onchange="countryWiseStateOnCreate(this.value)" data-placeholder=" <?php echo get_phrase('select_country'); ?>">
								<option value="0"><?php echo get_phrase('none'); ?></option>
								<?php foreach ($countries as $country) : ?>
									<option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group ">
						<label for="name"  class="col-sm-3 control-label" ><?php echo get_phrase('state'); ?></label>
						<div class="col-sm-7">
						<select name="state_id" id="state_id_on_create" class="form-control select2" data-bs-toggle="select2" required>
							<option value=""><?php echo get_phrase('select_state'); ?></option>
						</select>
						</div>

					</div>

					<div class="form-group">
						<label for="name" class="col-sm-3 control-label"><?php echo get_phrase('city_name'); ?></label>

						<div class="col-sm-7">
							<input type="text" class="form-control" name="name" id="name" placeholder="<?php echo get_phrase('city_name'); ?>">
						</div>
					</div>



					<div class="col-sm-offset-3 col-sm-5" style="padding-top: 10px;">
						<button type="submit" class="btn btn-info"><?php echo get_phrase('add_city'); ?></button>
					</div>
				</form>
			</div>
		</div>
	</div><!-- end col-->
</div>

<script>
	function countryWiseStateOnCreate(country_id) {

		console.log(country_id)
		$.ajax({
			url: "<?php echo site_url('admin/state_list/'); ?>" + country_id,
			type: "GET",
			success: function(response) {
				$('#state_id_on_create').html(response);
			}
		});

	}
</script>