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
                            <form class="form-horizontal" method="POST"  action="{{route('companies.update',$company->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PATCH">
                                    <div class="form-group"><label class="col-sm-2 control-label">Company Name:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="name" value="{{$company->name}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">email:</label>
                                        <div class="col-sm-10"><input type="email" class="form-control" name="email" value="{{$company->email}}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">logo :</label>
                                        <div class="col-sm-10">  <img src="{{ asset('storage/'.$company->logo) }}" style="width: 100px;height: 100px;" alt="" title=""></a></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">logo :</label>
                                        <div class="col-sm-10"><input type="file" name="logo" class="form-control" ></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Web site:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="website" value="{{$company->website}}"></div>
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

