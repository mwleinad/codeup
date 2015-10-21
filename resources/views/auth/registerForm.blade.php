		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required  />
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" required  />
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control" required />
		</div>

		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
		</div>

		<div class="form-group">
			<button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
		</div>