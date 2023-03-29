
<x-layout>
<article>
        <h1>
            <a href="/events/{{ $event->id }}">
                {{$event->title}}
            </a>
        </h1>
        <div>
            {{$event->body}}
        </div>
        <div>
            {{$event->host}}
        </div>
        <div>
            {{$event->date}}
        </div>
    </article>
  <a href="/events">go back</a>
  </x-layout>