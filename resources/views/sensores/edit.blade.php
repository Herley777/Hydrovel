
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar leitura
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h3 class="text-lg font-bold mb-5 text-gray-800">
                    Atualizar dados dos sensores
                </h3>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                        <strong>Verifique os campos:</strong>
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('sensores.update', $leitura->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="space-y-5">

                        <div>
                            <label class="block font-semibold mb-1">Pressão</label>
                            <input type="number" step="0.01" min="0"
                                name="pressao"
                                value="{{ old('pressao', $leitura->pressao) }}"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3">
                        </div>

                        <div>
                            <label class="block font-semibold mb-1">Vazão</label>
                            <input type="number" step="0.01" min="0"
                                name="vazao"
                                value="{{ old('vazao', $leitura->vazao) }}"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3">
                        </div>

                        <div>
                            <label class="block font-semibold mb-1">pH</label>
                            <input type="number" step="0.01" min="0" max="14"
                                name="ph"
                                value="{{ old('ph', $leitura->ph) }}"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3">
                        </div>

                        <div>
                            <label class="block font-semibold mb-1">Turbidez</label>
                            <input type="number" step="0.01" min="0"
                                name="turbidez"
                                value="{{ old('turbidez', $leitura->turbidez) }}"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3">
                        </div>

                        <div>
                            <label class="block font-semibold mb-1">Temperatura</label>
                            <input type="number" step="0.01"
                                name="temperatura"
                                value="{{ old('temperatura', $leitura->temperatura) }}"
                                required
                                class="w-full border border-gray-300 rounded-lg p-3">
                        </div>

                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">

                        <button type="submit"
                            style="background-color: #166534; color: white;"
                            class="px-6 py-3 rounded-lg font-bold hover:opacity-90">
                            Atualizar leitura
                        </button>

                        <a href="{{ route('sensores.index') }}"
                            style="background-color: #e5e7eb; color: #1f2937;"
                            class="px-6 py-3 rounded-lg font-bold hover:opacity-90">
                            Cancelar
                        </a>

                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
