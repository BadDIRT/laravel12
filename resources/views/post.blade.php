<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

  <article class="mb-10 max-w-4xl">
    <div class="p-6">
      <h2 class="capitalize text-3xl font-bold">{{ $post['title'] }}</h2>
      <div class="font-thin mt-1">
      <a href="/authors/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }} | {{ $post->created_at->diffForHumans() }}</a>
      </div>
      <p class="mt-5">{{ $post['body'] }}</p>
      <a href="/posts" class="inline-block mt-4 text-blue-400 hover:underline">&laquo; Read more</a>
    </div>
  </article>

</x-layout>