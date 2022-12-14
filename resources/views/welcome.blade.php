@extends('layouts.main')

@section('title', 'Halo kamu!')

@section('section')
   <div class="mb-5">
      @for ($i = 0; $i < 10; $i++)
         @if ($i % 2 == 0)
            <p>Kamu Jelek 😋</p>
         @else
            <p>Kamu Ganteng 😎</p>
         @endif
      @endfor
   </div>

   <h1 class="fs-3 text-uppercase fw-bold mb-3">Data-data Pelawak</h1>

   <table class="table text-white">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Gender</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($data as $personData)
            <tr>
               <th scope="row">{{ $loop->index }}</th>
               <td>{{ $personData['nama'] }}</td>
               <td>{{ $personData['umur'] }}</td>
               <td>
                  @switch($personData['gender'])
                     @case('L')
                        Laki-Laki
                     @break

                     @case('P')
                        Perempuan
                     @break

                     @default
                        Non Binary
                  @endswitch
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>
@endsection
