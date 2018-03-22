@extends('layouts.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
           <h5>Data Tables example with responsive plugin employee</h5>
                <a href="{{ route('employes.create')}}" class=" btn btn-primary btn-outline pull-right" style="margin-top: -7px;" >
                            Create a new employee   </a>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>{{trans('app.first_name')}}</th>
                <th>{{trans('app.last_name')}}</th>
                <th>{{trans('app.Email')}}</th>
                <th>{{trans('app.phone_number')}}</th>
                <th>{{trans('app.action')}}</th>
            </tr>
            </thead>
            <tbody>
                    @forelse($employes as $employee)
                    <tr>
         
                         <td>{{$employee->first_name}}</td>
                         <td>{{$employee->last_name}}</td>
                         <td>{{$employee->email}}</td>
                        <td> {{$employee->phone_number}}</td>
                        <td>
                                <a href="{{route('employes.edit', ['employee' => $employee->id])}}" class="fa fa-pencil">
                                    </a>
                                    <form action="{{ route('employes.destroy', ['employee' => $employee->id])}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="fa fa-trash-o" onclick="return confirm('Are you sure to delete this data');"></button>
                                    </form>
                        </td>
                        
             </tr>
         
         @empty
         
             <h1>No Employee</h1>
         
         @endforelse
            </tbody>
            <tfoot>
            <tr>
                <th>{{trans('app.first_name')}}</th>
                <th>{{trans('app.last_name')}}</th>
                <th>{{trans('app.Email')}}</th>
                <th>{{trans('app.phone_number')}}</th>
                <th>{{trans('app.action')}}</th>
            </tr>
            </tfoot>
            </table>
                </div>

            </div>
        </div>
    </div>
    </div>

  
@endsection
