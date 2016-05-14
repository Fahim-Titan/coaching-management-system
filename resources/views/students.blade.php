{!! Form::open(array('route' => 'student.store', 'method' => 'POST', 'files'=>true)) !!}
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
			{!! Form::number('phone_number') !!}
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
			{!! Form::label('father_name', 'Father_name:') !!}
			{!! Form::text('father_name') !!}
		</li>
		<li>
			{!! Form::label('mother_name', 'Mother_name:') !!}
			{!! Form::text('mother_name') !!}
		</li>
		<li>
			{!! Form::label('gurdian_phone_number', 'Gurdian_phone_number:') !!}
			{!! Form::number('gurdian_phone_number') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password') !!}
		</li>
		<li>
			{!! Form::submit('save student data') !!}
		</li>
	</ul>
{!! Form::close() !!}
<div class="alert-warning">
	@foreach( $errors->all() as $error )
		<br> {{ $error }}
	@endforeach
</div>