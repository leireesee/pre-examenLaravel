<x-app-layout> 
    
<x-slot name="header"> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="width: 300px"> {{ __('Devices
    available') }} </h2>
    
</x-slot>

    @if ($dispositivos->has('success'))
    <div></div>
    @endif

    <div class="py-12"> <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
    @foreach ($dispositivos as $dispositivo)
    <div class="mt-10">
    <div class="grid grid-cols-3 md:grid-cols-2 gap-6 lg:gap-8">
        <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50
        via-transparent
        dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex
        motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
        <div>

        <div class="flex items-center justify-center">
            <!-- imagen dispositivo -->
            <img src=" {{ $dispositivo->url }}" alt="" width="600px">
        </div>

        <div class="baseline-align">
            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                <!-- modelo del dispositivo -->
                {{ $dispositivo->modelo }}
            </h2>

            <h3 class="mt-3 text-sm font-regular text-gray-800 dark:text-white">
                <!-- tipo del dispositivo -->
                {{ $dispositivo->tipo }}
            </h3>
        </div>

    </div>
    </a>
    </div>
    <br>
    @endforeach


    </div>
    </div>
    </x-app-layout>