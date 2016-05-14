{!! Form::open(array('route' => 'teacher.store', 'method' => 'POST', 'files'=>true)) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('gender', 'Gender:') !!}
			{!! Form::text('gender') !!}
		</li>
		<li>
			{!! Form::label('blood_type', 'Blood_type:') !!}
			{!! Form::text('blood_type') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email') !!}
		</li>
		<li>
			{!! Form::label('dob', 'Dob:') !!}
			{!! Form::date('dob') !!}
		</li>
		<li>
			{!! Form::label('phone_number', 'Phone_number:') !!}
			{!! Form::text('phone_number') !!}
		</li>
		<li>
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::file('image') !!}
		</li>
		<li>
			{!! Form::label('qualification', 'Qualification:') !!}
			{!! Form::text('qualification') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}

<div class="alert-warning">
	@foreach( $errors->all() as $error )
		<br> {{ $error }}
	@endforeach
</div>