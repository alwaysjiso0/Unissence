<div id="body_right_write" class="col-lg-7">
    <div class="col-10 offset-1">
			<?php echo form_open_multipart(base_url().'Write/new_post'); ?>
				    <h3 class="text-center">Write a post</h3>  

					<div class="row">

						<div class="col-md-12">
							<div class="form-group">
								<label for="title">Title</title>
								<input type="text" class="form-control" placeholder="Title" required="required" name="title">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="categories">Category</title>
								<select class="form-control" name="categories">
									<option value="general">General</option>
									<option value="academics">Academics</option>
									<option value="employability">Employability</option>
									<option value="fvisa">Financials & Visa</option>
									<option value="social">Social Life</option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Write" required="required" name="content" rows="10"></textarea>
							</div>
						</div>

						<div class="col-md-12">
							<!-- <?php if (isset($error)) echo $error; ?> -->
							<div class="form-group">
								<input type="file" class="form-control dropzone" name="userfile[]" multiple="multiple">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<a href="<?php echo base_url(); ?>Write/new_post">
									<button type="submit" class="btn btn-primary btn-block">Post</button>
								</a>
							</div>   
						</div>

					</div>

		

			<?php echo form_close(); ?>
	</div>

</div>
