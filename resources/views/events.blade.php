<x-layout>
    @foreach($events as $event)
    <article>
        <h1>
            <a href="/events/{{ $event->id }}">
                {{$event->title}}
            </a>
        </h1>
        <div>
            {{$event->excerpt}}
        </div>
    </article>
    @endforeach
</x-layout>