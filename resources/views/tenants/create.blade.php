<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar inquilino') }}
        </h2>
    </x-slot>

    <x-container class="py-10">
        <div class="bg-white shadow p-10">
                <form action="{{route('tenants.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input-label>
                            Nombre
                        </input-label>
                        <x-text-input name="id" class="w-full mt-2" placeholder="Ingrese el nombre"></x-text-input>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                               <x-input-error :messages="$error"/>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-blue">
                            Guardar
                        </button>
                    </div>
                </form>
        </div>
    </x-container>

</x-app-layout>
