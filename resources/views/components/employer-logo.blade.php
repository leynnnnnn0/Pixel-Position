@props(['employer', 'width' => 100])
<img src="{{ asset($employer->logo) }}" alt="" width="{{ $width }}" class="rounded-xl"/>

{{--<img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" alt="" class="rounded-xl"/>--}}
