@extends('layouts.main')

@section('content')


</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Add Company</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <form class="form-horizontal" method="POST"  action="{{route('employes.update',$employee->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PATCH">
                                    <div class="form-group"><label class="col-sm-2 control-label">{{trans('app.first_name')}} :</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="first_name" value="{{$employee->first_name}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">{{trans('app.last_name')}}:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="last_name" value="{{$employee->last_name}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">{{trans('app.Email')}} :</label>
                                        <div class="col-sm-10"><input type="email" class="form-control" name="email" value="{{$employee->email}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">{{trans('app.phone_number')}} :</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="phone_number" value="{{$employee->phone_number}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">{{trans('app.CompanyName')}} :</label>
                                        <div class="col-sm-10">
                                            <select name="company_id" class="form-control">
                                                <option value="{{$employee->company->id}}">{{$employee->company->name}}</option>
                                                @foreach ($campanies as $campany)
                                                @if ($employee->company->id === $campany->id)
                                                @else
                                                <option value="{{$campany->id}}">{{$campany->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                    </div>
                            
    
                            </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>

@endsection

