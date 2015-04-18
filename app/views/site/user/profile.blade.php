@extends('site.layouts.customer')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
       <h3 class="panel-title">User Profile
            <a class="btn btn-default btn-xs pull-right" style="color: black;" href="{{{ URL::to('user/profile/'. $user->username . '/edit') }}}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit
            </a>
       </h3>
    </div>
    <div class="panel-body">
        <table class="table">
        
            <tbody>
                <tr>
                    <th scope="row">Avatar</th>
                    <td><img src="{{asset($avatar)}}" height="50" width="50"></td>
                </tr>
                <tr>
                    <th scope="row">Address</th>
                    <td>{{ $user->address->address . ', ' . $user->address->city->city . ', ' . $user->address->city->country->country }}</td>
                </tr>
                <tr>
                    <th scope="row">UserName</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="row">First Name</th>
                    <td>{{ $user->first_name }}</td>
                </tr>
                <tr>
                    <th scope="row">Last Name</th>
                    <td>{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th scope="row">Phone Number</th>
                    <td>{{ $user->phone_number }}</td>
                </tr>
                <tr>
                    <th scope="row">Confirmed</th>
                    <td>{{ ( $user->confirmed ) ? 'True' : 'False'}}</td>
                </tr>
                <tr>
                    <th scope="row">Signed Up</th>
                    <td>{{ $user->joined() }}</td>
                </tr>
            </tbody>
          </table>
    </div>
  
 <!-- END panel-->

</div>
@stop
