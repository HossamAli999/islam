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
        <th>verses count</th>
        <th>revelation place</th>

        {{-- <th>file size</th> --}}
      </tr> 

    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
    @foreach ($quran['chapters'] as $item)
    
    
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name_simple']}}</td>
        <td>{{$item['name_arabic']}}</td>
        <td>{{$item['verses_count']}}</td>
        <td>{{$item['revelation_place']}}</td>
        {{-- <td><audio controls>
          <source src="{{$item['audio_url']}}" type="audio/mpeg">
        </audio></td> --}}

      </tr> 

    @endforeach 
    </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->
</div>
@endsection
