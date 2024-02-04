@php
$classBefore = "text-green-600 after:content-[''] after:w-full after:h-1 after:border-b after:border-green-100 after:border-4 after:inline-block-800";
$classAfter = "flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block-700";
$classLast = "";

@endphp
<div class="stepper px-5 py-10">
    <ol class="flex items-center w-full">

        @foreach($steps as $step)
            @if(!$loop->last)
                @if($step->id == $order->status_id)
                    <li class="{{$classAfter}}">
                        <div class="absolute mt-20 flex items-center w-12 justify-center">
                            <p >{{$step->name}}</p>
                        </div>

                        <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0">
                            <svg aria-hidden="true" class=" text-gray-200 animate-spin  fill-green-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg>
                        </span>
                    </li>

                @elseif($step->id < $order->status_id)
                    <li class="flex items-center w-full  {{$classBefore}}">
                        <div class="absolute mt-20 flex items-center w-12 justify-center">
                            <p >{{$step->name}}</p>
                        </div>

                        <span
                            class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full lg:h-12 lg:w-12 shrink-0">
                        <svg class="w-3.5 h-3.5 text-green-600 lg:w-4 lg:h-4" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5.917 5.724 10.5 15 1.5"/>
                        </svg>
                    </span>
                    </li>

                @else
                    <li class="flex items-center w-full  {{$classAfter}}">
                        <div class="absolute mt-20 flex items-center w-12 justify-center">
                            <p >{{$step->name}}</p>
                        </div>

                        <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="-0.5 0 25 25">
                                    <path d="M3 21.32L21 3.32001" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M3 3.32001L21 21.32" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                        </span>
                    </li>
                @endif

            @else
                <li class="flex items-center w-full">
                    <div class="absolute mt-20 flex items-center w-12 justify-center">
                        <p >{{$step->name}}</p>
                    </div>

                    <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0">
                        <svg class="w-4 h-4 text-gray-500 lg:w-5 lg:h-5" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z"/>
                        </svg>
                    </span>
                </li>
            @endif
        @endforeach

{{--       --}}

    </ol>
</div>
