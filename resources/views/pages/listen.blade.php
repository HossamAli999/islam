@extends('layouts.app')

@section('content')

<div class="container">
    <h1>abdul baset mujawwad</h1>
    <ul>
   
        {{-- <li>{{$item['revelation_place']}} , {{$item['revelation_order']}} {{$item['name_simple']}} {{$item['name_arabic']}}</li> --}}

    </ul>
   <!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead> 
   
      <tr>
        <th>#</th>
        {{-- <th>chapter number</th> --}}
        {{-- <th>format</th> --}}
        <th>listen</th>
        <th>file size</th>
      </tr> 

    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
    @foreach ($quran['audio_files'] as $key=>$item)
      <tr>
        {{-- <th scope="row">{{$key+1}}</th> --}}
        <td>{{NumConvert::word($item['chapter_id'])}}</td>
        {{-- <td>{{$item['format']}}</td> --}}
        <td>
          <audio
            controls
            preload="none"
            src="{{$item['audio_url']}}"
            type="audio/mpeg"
            >
          </audio>
        </td>
        <td>{{ substr($item['file_size']/1048576, 0,5)}} MB</td>


      </tr> 
    @endforeach 
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
</div>
@endsection
