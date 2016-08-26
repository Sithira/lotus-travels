@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h2>Employee List
                    <br/>
                    <small><a href="{!! url('/system/employee/create') !!}">Add Employee</a></small>
                </h2>

                <br/>

                <div id="ajax-search">
                    {!! Form::text('search', null, ['class' => 'form-control', 'id' => 'search', 'placeholder' => 'Search Employees']) !!}

                    <br/>
                    <br/>

                    <div id="content"></div>
                </div>

                <br/>
                <br/>
                <br/>

                <table class="table table-responsive">
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>System Limit</th>
                        <th>Job Role</th>
                        <th></th>
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{!! $employee->id !!}</td>
                            <td>{!! $employee->name !!}</td>
                            <td>
                                <ul>
                                    @foreach($employee->admin as $type)
                                        <li>{!! $type->type !!} &nbsp;</li>
                                    @endforeach
                                </ul>
                            </td>

                            <td>
                                <ul>
                                    @foreach($employee->employee_type as $role)
                                        <li> {!! $role->name !!} &nbsp; </li>
                                    @endforeach
                                </ul>
                            </td>

                            <td>
                                <a href="{!! url('/system/employee/'.$employee->id.'/') !!}" class="btn btn-default">
                                    view employee
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
            <div class="col-sm-12 col-md-3"></div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var url = '/api/secured/employee/name/';
        $(document).on('keypress', '#search', function () {

            $('#content').html("");

            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: url + value,
                dataType: "json",
                success: function (data) {
                    var loopedData = "";
                    for (i = 0; i < data.length; i++) {
                        loopedData += '' +
                                '<a href="/system/employee/' + data[i].id + '">' + data[i].name + '</a>'
                    }

                    if (data.length != 0) {
                        $('#content').append(loopedData);
                    } else {
                        $('#content').html("");
                    }
                }
            });


        });
    </script>
@endsection