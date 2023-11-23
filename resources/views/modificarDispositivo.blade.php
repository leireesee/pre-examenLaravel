<x-guest-layout>
    <form method="POST" action="{{ route('modificarDispositivo') }}">
        @csrf

        <!-- Tipo -->
        <div>
            <x-input-label for="tipo" :value="__('Tipo')" />
            <x-text-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="{{ $dispositivo->tipo }}" required autofocus autocomplete="tipo" />
            <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
        </div>

        <!--Modelo -->
        <div class="mt-4">
            <x-input-label for="modelo" :value="__('Modelo')" />
            <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="{{ $dispositivo->modelo }}" required autofocus autocomplete="modelo" />
            <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
        </div>

        <!-- Precio -->
        <div class="mt-4">
            <x-input-label for="precio" :value="__('Precio')" />
            <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="{{ $dispositivo->precio }}" required autofocus autocomplete="precio" />
            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
        </div>

        <br>
        <div class="mt-10">
            <x-primary-button>
                {{ __('Modificar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
