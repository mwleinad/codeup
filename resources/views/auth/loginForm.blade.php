		{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}"  />
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}"  />
		</div>

		<div class="form-group">
			<input type="checkbox" name="remember" /> Remember Me
		</div>

		<div class="form-group">
			<button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
		</div>