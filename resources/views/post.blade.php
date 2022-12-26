<x-app-layout>

    <x-slot name="header2">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'ojfsfpfs' }}
    </h2>
    </x-slot> 
    <h4>Posts</h4>
    <ul>
        @foreach($posts as $post)
        <li><a href="">{{$post->title}}</a></li>
        @endforeach
    </ul>


    </x-app-layout>