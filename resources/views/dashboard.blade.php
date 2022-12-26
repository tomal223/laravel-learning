<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Dashboard') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white  p-4 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex">
            <div class="flex-1">
            <h4>Add Post</h4>
            <form action="{{ route('add-post') }}" method="post">
                @csrf
                <div class="input-item mb-4">
                    <input type="text" name="title" value="{{old('title')}}"
                        class="w-full h-40 rounded-sm border-gray-500">
                </div>
                <div class="input-item mb-4">
                    <textarea name="description" class="border-gray-500  rounded-sm w-full" id="" cols="30"
                        rows="10"></textarea>
                </div>
                <div class="input-item mb-4">
                    <button type="submit" class="bg-slate-800 inline-block rounded-sm p-4 py-2 text-dark font-bold">Add
                        Post</button>
                </div>
            </form>
        </div> 
    </div>
    </div>
    </div>

    </x-app-layout>