@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-500 group">
    <div class="self-start"></div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-500 text-xl font-bold">
            <a href="{{ $job->url }}"></a>
            {{ $job->title }}</h3>
        <p class="mt-5 text-xs">{{ $job->schedule }} - From ${{ number_format($job->salary) }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
       <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
</div>
