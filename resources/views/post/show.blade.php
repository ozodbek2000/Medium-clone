<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">
                    {{ $post->title }}
                </h1>
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" />
                </div>

                <!-- User avatar -->
                <div>
                    <div class="flex gap-2">
                        <a href="{{ route('profile.show', $post->user) }}" class="hover:underline">{{ $post->user->name }}</a>
                        &middot;
                        <a href="#" class="text-emerald-600">Follow</a>
                    </div>
                    <div class="flex gap-2 text-gray-500 text-sm">
                        {{ $post->readTime() }} min read
                        &middot;
                        {{ $post->created_at->format('M d, Y') }}
                    </div>
                </div>
                <!-- User avatar -->

                <!-- Clap section -->
                    <x-clap-button />
                <!-- Clap section -->

                <!-- Content section -->
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">
                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>
                <!-- Content section -->

                <div class="mt-8 text-">
                    <span class="px-4 py-2 bg-gray-200 rounded-xl">
                        {{ $post->category->name }}
                    </span>
                </div>

                <!-- Clap section -->
                    <x-clap-button />
                <!-- Clap section -->
            </div>
        </div>
    </div>
</x-app-layout>
