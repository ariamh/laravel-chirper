<x-app-layout>
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('chirps.update', $chirp) }}" method="post">
            @csrf
            @method('patch')
            <textarea name="message" rows="4" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" @style('resize: none')>{{ old('message', $chirp->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Update') }}</x-primary-button>
                <x-secondary-button href="{{ route('chirps.index') }}">{{ __('Cancel') }}</x-secondary-button>
            </div>
        </form>
    </div>
</x-app-layout>
