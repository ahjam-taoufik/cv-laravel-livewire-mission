<div class="flex flex-col px-2 py-5 my-2 shadow-md hover:shadow-2xl bg-white border-gray-400  border-2 rounded ">
    <div class="py-3 ">
       
       <div class="flex justify-between ">
           <h3 class="font-bold text-xl mb-2">{{ $job->title }}</h3>
           <button wire:click='addlike'>
            @if ($job->isLiked())
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" stroke="green">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            @else
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            @endif
           </button>

       </div>
       
        <p class="text-gray-700 text-base">{{ $job->description }}</p>
    </div>


    <div class="flex items-center justify-between px-6 py-4">
        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Voir la mission
        </a>
    </div>
    <span class="text-sm text-gray-500" >{{number_format($job->price /100,2, ',',' ')}} Dhs </span>
</div>