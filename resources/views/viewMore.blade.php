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
                            <th class="text-center"> URL</th> 
                            <th class="text-center"> Languagesupported </th>
                            <th class="text-center"> Periodicity </th>
                            <th class="text-center"> Economycoverage</th>
                            <th class="text-center"> Granularity</th>
                            <th class="text-center"> Number of economies</th>
                            <th class="text-center"> Topics</th>
                            <th class="text-center"> Updatefrequency </th>
                            <th class="text-center"> Updateschedule </th>
                            <th class="text-center"> Last revision date</th>
                            <th class="text-center"> Contactdetails</th>
                            <th class="text-center"> Access option</th>
                            <th class="text-center"> Bulkdownload</th>
                            <th class="text-center"> Cite </th>
                            <th class="text-center"> Detail page url </th>
                            <th class="text-center"> Popularity</th>
                            <th class="text-center"> coverage</th>
                            <th class="text-center"> api</th>
                            <th class="text-center"> Apiaccessurl</th>
                            <th class="text-center"> Apisourceid </th>                 
                          </tr>
                        </thead>
                        <tbody>
                          <!--  Initialize Table ID counter -->
                          @php $id = 1; @endphp
                          @foreach($data as $detail)
                          <tr>
                            <td class="text-center"> {{$detail->trx_id}} </td>
                            <td class="text-center"> {{$detail->name}}</td>
                            <td class="text-center"> {{$detail->acronym}} </td>
                            <td class="text-center"> {{$detail->description}} </td>
                            <td class="text-center"> {{$detail->type}} </td>
                            <td class="text-center"> {{$detail->url}}</td>
                            <td class="text-center"> {{$detail->languagesupported}}</td>
                            <td class="text-center"> {{$detail->periodicity}} </td>
                            <td class="text-center"> {{$detail->economycoverage}} </td>
                            <td class="text-center"> {{$detail->granularity}} </td>
                            <td class="text-center"> {{$detail->numberofeconomies}}</td>
                            <td class="text-center"> {{$detail->topics}}</td>
                            <td class="text-center"> {{$detail->updatefrequency}} </td>
                            <td class="text-center"> {{$detail->updateschedule}} </td>
                            <td class="text-center"> {{$detail->lastrevisiondate}} </td>
                            <td class="text-center"> {{$detail->contactdetails}}</td>
                            <td class="text-center"> {{$detail->accessoption}}</td>
                            <td class="text-center"> {{$detail->bulkdownload}} </td>
                            <td class="text-center"> {{$detail->cite}} </td>
                            <td class="text-center"> {{$detail->detailpageurl}} </td>
                            <td class="text-center"> {{$detail->popularity}}</td>
                            <td class="text-center"> {{$detail->coverage}} </td>
                            <td class="text-center"> {{$detail->api}} </td>
                            <td class="text-center"> {{$detail->apiaccessurl}} </td>
                            <td class="text-center"> {{$detail->apisourceid}}</td>
                            
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
