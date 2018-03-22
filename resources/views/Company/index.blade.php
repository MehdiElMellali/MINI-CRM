@extends('layouts.main')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                    <h5>Data Tables example with responsive plugin Company</h5>
                    <a href="{{ route('companies.create')}}" class=" btn btn-primary btn-outline pull-right" style="margin-top: -7px;" >
                                Create a new company   </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>{{trans('app.CompanyName')}}</th>
                <th>{{trans('app.Email')}}</th>
                <th>{{trans('app.Logo')}}</th>
                <th>{{trans('app.Website')}}</th>
                <th>{{trans('app.action')}}</th>
            </tr>
            </thead>
            <tbody>
                    @forelse($campanies as $company)
                    <tr>
         
                         <td>{{$company->name}}</td>
                         <td>{{$company->email}}</td>
                         <td><img src="{{ url('storage/'.$company->logo) }}" alt="" title="" /></td>
                        <td> {{$company->website}}</td>
                        <td>
                                <a href="{{route('companies.edit', ['company' => $company->id])}}" class="fa fa-pencil">
                                    </a>
                                    <form action="{{ route('companies.destroy', ['company' => $company->id])}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="fa fa-trash-o" onclick="return confirm('Are you sure to delete this data');"></button>
                                    </form>
                        </td>
                        
             </tr>
         
         @empty
         
             <h1>No Company</h1>
         
         @endforelse
            </tbody>
            <tfoot>
            <tr>
                    <th>{{trans('app.CompanyName')}}</th>
                    <th>{{trans('app.Email')}}</th>
                    <th>{{trans('app.Logo')}}</th>
                    <th>{{trans('app.Website')}}</th>
                    <th>{{trans('app.action')}}</th>
            </tr>
            </tfoot>
            </table>
                </div>

            </div>
        </div>
    </div>
    </div>

   

    <!-- Mainly scripts -->
   

    <!-- Page-Level Scripts -->
  
@endsection
