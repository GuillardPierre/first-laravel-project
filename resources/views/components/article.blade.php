@props(['id', 'title', 'content'])

<article style="border: 1px solid black; border-radius: 8px; padding: 3px">
    <h3 style="font-weight: 600">{{ $title }}</h3>
    <p>{{ $content }}</p>
    <a href="/articles/{{ $id }}" style="font-size: 10px">Cliquez ici pour lire l'article</a>
</article>