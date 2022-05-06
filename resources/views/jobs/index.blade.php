  @extends('layouts.app')

    @section('content')
        <h1>Nos dernieres missions</h1>
      
            @forelse ($jobs as $job)
               
                    <div class="flex flex-col px-2 py-5 my-2 shadow-md hover:shadow-2xl bg-white border-gray-400  border-2 rounded ">

                        <div class="py-3 ">
                            <h3 class="font-bold text-xl mb-2">{{ $job->title }}</h3>
                           
                            <p class="text-gray-700 text-base">{{ $job->description }}</p>
                        </div>


                        <div class="flex items-center justify-between px-6 py-4">
                            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Voir la mission
                            </a>
                        </div>
                        <span class="text-sm text-gray-500" >{{number_format($job->price /100,2, ',',' ')}} Dhs </span>


                    </div>
               
            @empty
                <p>Aucune mission pour le moment</p>
            @endforelse
 


    @endsection
