@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Display Data</div>

                <div class="card-body">
                    <div class="table-responsive">
                      <table id="data" class="table table-striped table no-margin">
                        <thead>
                          <tr class="" style="background-color:#C0C0C0;">
                            <th class="text-center"> ID </th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Acronym</th>
                            <th class="text-center"> Description</th>
                            <th class="text-center"> Type</th>
                            <th class="text-center"> Created</th>   
                            <th class="text-center"> View</th>                   
                          </tr>
                        </thead>
                        <tbody>
                          <!--  Initialize Table ID counter -->
                          @php $id = 1; @endphp
                          @foreach($data as $detail)
                          <tr>
                            <td class="text-center"> {{$id ++}} </td>
                            <td class="text-center"> {{$detail->name}}</td>
                            <td class="text-center"> {{$detail->acronym}} </td>
                            <td class="text-center"> {{$detail->description}} </td>
                            <td class="text-center"> {{$detail->type}} </td>
                            <td class="text-center"> {{$detail->created_at}}</td> 
                            <td class="text-center"> <a href="{{route('view-more-details', $detail->row_id)}}" class="btn btn-info btn-xs" role="button">View More</a></td>                          
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
