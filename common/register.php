<div id="register" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Close">x</button>
		<h3 id="registerLabel">Register | Enter Your Contact Details</h3>
	</div>
	<form method="post" style="margin:0;">
		<div class="modal-body">
			<div class="form-signin">
				<input type="text" placeholder="First Name" class="input-block-level" required />
				<input type="text" placeholder="Last Name" class="input-block-level" required />
				<input type="number" placeholder="Mobile" class="input-block-level" required />
				<input type="email" placeholder="Email" class="input-block-level" required />
				<input type="password" placeholder="Password" class="input-block-level" required />
				<input type="password" placeholder="Confirm Password" class="input-block-level" required />
			</div>
		</div>
		<div class="modal-footer">
			<div style="float:left;">
				<button class="btn btn-warning" type="submit" name="submit">Register</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			</div>
			<div style="float:right;"> Already Register then click here to<a href="#login" class="btn btn-link" data-toggle="modal">Login</a> </div>
		</div>
	</form>
</div>