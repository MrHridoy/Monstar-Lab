@extends('layouts.other')
@section('other')
 @if (session('employee'))
    <div class="modal-dialog" style="font-size: 20px;">
        <div class="modal-content">
            <div class="modal-header">
        {{ session('employee') }}
        </div>
    </div>
</div>
@endif
    <div class="container">
        <div class="search_area">
        <form action="{{route('employees.search')}}" method="POST" enctype="multipart/form-data">
            @csrf()
            <input type="text" name="search" placeholder="search" style="font-size: 15px;" />
            <select name="options" id="options" style="font-size: 15px;">
                <option value="first_name" style="font-size: 15px;">First Name</option>
                <option value="blood" style="font-size: 15px;">Blood Group</option>
                <option value="number" style="font-size: 15px;">Mobile Number</option>
                <option value="email" style="font-size: 15px;">E-mail</option>
                <option value="nid" style="font-size: 15px;">NID</option>
            </select>
            <button type="submit" class="btn btn-primary" style="font-size: 15px;">Submit</button>
        </form>
    </div>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="/employee" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Father's Name</th>
                        <th>E-mail</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Blood Group</th>
                        <th>NID Number</th>
                        <th>Gender</th>
                        <th>Option</th>
                                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $emp)
                    <tr>
                        <td>{{$emp->first_name}}</td>
                        <td>{{$emp->last_name}}</td>
                        <td>{{$emp->father_name}}</td>
                        <td>{{$emp->email}}</td>
                        <td>{{$emp->number}}</td>
                        <td>{{$emp->address}}</td>
                        <td>{{$emp->blood}}</td>
                        <td>{{$emp->nid}}</td>
                        <td>{{$emp->gender}}</td>
                        <td>
                            <a href="{{ asset('/employee/show?id='.$emp->id)}}" class="view"><i class="material-icons" data-toggle="tooltip" title="View">&#xE896;</i></a>
                            <a href="{{ asset('employee/update?id='.$emp->id)}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <a href="{{ asset('/employee/delete?id='.$emp->id)}}"  onclick="return confirm('Are you sure you want to delete these Records?')" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
     
    @endsection