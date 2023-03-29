<x-layout>
    @foreach($events as $event)
    <article>
        <h1>
            <a href="/events/{{ $event->slug }}">
                {{$event->title}}
            </a>
        </h1>
        <a href="/categories/{{$event->category->name}}">
         Type:   {{$event->category->name}}
        </a>
        <div>
            {{$event->excerpt}}
        </div>
    </article>
    @endforeach
</x-layout>