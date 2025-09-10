<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
@foreach ($posts as $post)

  <article class="mb-10 shadow max-w-4xl">
    <div class="p-6">
      <h2 class="capitalize text-3xl font-bold">{{ $post['title'] }}</h2>
      <p class="font-thin mt-1">{{ $post['author'] }}</p>
      <p class="mt-5">{{ Str::limit($post['body'],150) }}</p>
      <a href="/posts/{{ $post['id'] }}" class="inline-block mt-4 text-blue-400 hover:underline">Read more &raquo;</a>
    </div>
  </article>

  @endforeach
</x-layout>