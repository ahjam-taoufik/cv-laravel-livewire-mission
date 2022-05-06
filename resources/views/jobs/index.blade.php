  @extends('layouts.app')

    @section('content')
        <h1>Nos dernieres missions</h1>
      
            @foreach($jobs as $job)
               
                   <livewire:job :job=$job />

            @endforeach


    @endsection
