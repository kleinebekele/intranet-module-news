<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-semibold text-gray-800">Beitrag anlegen</h1>
    </x-slot>

    <div class="max-w-2xl">
        <form method="POST" action="{{ route('module.news.store') }}"
              class="rounded-xl border border-gray-200 bg-white p-6 space-y-5">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titel</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}" required
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Inhalt</label>
                <textarea id="body" name="body" rows="6" required
                          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('body') }}</textarea>
                @error('body')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-3">
                <button type="submit"
                        class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                    Veröffentlichen
                </button>
                <a href="{{ route('module.news.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Abbrechen</a>
            </div>
        </form>
    </div>
</x-app-layout>
