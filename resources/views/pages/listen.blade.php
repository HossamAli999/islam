@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Quran</h1>
    <ul>
   
        {{-- <li>{{$item['revelation_place']}} , {{$item['revelation_order']}} {{$item['name_simple']}} {{$item['name_arabic']}}</li> --}}

    </ul>
   <!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead> 
   
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Arabic Name</th>
        <th>listen</th>
        <th>Download</th>
        <th>file size</th>
      </tr> 

    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
    @foreach ($quran['audio_files'] as $item)
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['format']}}</td>
        <td>
          <td>
          <audio controls src="{{$item['audio_url']}}">
            Your browser does not support the
            <code>audio</code> element.
          </audio>
          </td>
          <td><a href="{{$item['audio_url']}} "Download>Download audio </a>
          </td>
          </td>
        <td>{{$item['file_size']}}</td>

      </tr> 
    @endforeach 
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
</div>
@endsection
