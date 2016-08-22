{!! Form::label('tour','Select Tour') !!}
{!! Form::select('tour', $packages, null, ['placeholder' => 'Select Tour...']) !!}
{!! Form::label('tourDate') !!}
{!! Form::Select('tourDate',$packages, null, ['placeholder' => 'Select Tour Date...']) !!}

<br />
{!! Form::label('fname', 'Fist Name :') !!}
{!! Form::text('fname', null, ['class' => 'form-control']) !!}

<br/>
{!! Form::label('sname', 'Second Name :') !!}
{!! Form::text('sname', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('lname', 'Last Name :') !!}
{!! Form::text('lname', null, ['class' => 'form-control']) !!}

<br />
{!! Form::label('otherName','Other Name :') !!}
{!! Form::text('otherName', null,['class' => 'form-control' ]) !!}

<br />
{!! Form::label('age','Age :') !!}
{!! Form::text('age', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('dob','Date Of Birth :') !!}
{!! Form::date('dob', \Carbon\Carbon::now()) !!}
<br />
{!! Form::label('phoneNumber','Phone Number :') !!}
{!! Form::text('number', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('nic','NIC Number') !!}
{!! Form::text('nic', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('passportId','Passport ID :') !!}
{!! Form::text('passport', null,['class' => 'form-control']) !!}

<br />
{!! Form::label('address1','Address 1 :') !!}
{!! Form::text('address1', null,['class'=>'form-control']) !!}

<br />
{!! Form::label('address2','Address 2 :') !!}
{!! Form::text('address2', null,['class'=>'form-control']) !!}

<br />
{!! Form::submit($btn, ['class' => 'btn btn-default btn-block']) !!}