@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-500 group">

    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>

    <div class="flex flex-col flex-1">
        <a class="self-start text-xs text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="flex-1 font-bold text-xl mt-3 hover-group:text-blue-500">
            {{ $job->title }}</h3>
        <p class="font-bold text-gray-600 text-sm">{{ $job->schedule }} - From ${{ number_format($job->salary) }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>



</div>
