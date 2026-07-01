<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h1 class="text-xl font-semibold text-gray-800">Neuigkeiten</h1>
            <a href="{{ route('module.news.create') }}"
               class="inline-flex items-center gap-1.5 rounded-lg bg-indigo-600 px-3 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Beitrag anlegen
            </a>
        </div>
    </x-slot>

    <div class="max-w-3xl space-y-4">
        @forelse ($posts as $post)
            <article class="rounded-xl border border-gray-200 bg-white p-5">
                <h2 class="text-lg font-semibold text-gray-800">{{ $post->title }}</h2>
                <p class="mt-1 text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                <p class="mt-3 text-gray-600 whitespace-pre-line">{{ $post->body }}</p>
            </article>
        @empty
            <div class="rounded-xl border border-dashed border-gray-300 bg-white p-8 text-center text-gray-500">
                Noch keine Beiträge. Lege den ersten an!
            </div>
        @endforelse
    </div>
</x-app-layout>
