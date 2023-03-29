
<x-layout>
<article>
        <h1>
            <a>
                {{$event->title}}
            </a>
        </h1>
        <div>
           <a>{{$event->body}}</a> 
        </div>
        <div>
           <a>Host: {{$event->host}}</a> 
        </div>
        <div>
        <a>Date: {{$event->date}}</a> 
        </div>
    </article>
  <a href="/events">go back</a>
  </x-layout>