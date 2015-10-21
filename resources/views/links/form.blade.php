		{{ csrf_field() }}
		{{--<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />--}}
		<div class="form-group">
			<label for="linkName">Link Name:</label>
			<input type="text" name="linkName" id="linkName" class="form-control" value="{{ old('linkName') }}"  />
		</div>

		<div class="form-group">
			<label for="link">Link:</label>
			<input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}"  />
		</div>

		<div class="form-group">
			<button type="submit" name="submit" id="submit" class="btn btn-primary">Add your Link</button>
		</div>