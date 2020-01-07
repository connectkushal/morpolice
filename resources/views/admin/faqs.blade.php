<div class="box">
    <div class="content">
        <p class="title">{{ __('Frequently Asked Questions') }}</p>
        <hr>
            @foreach ($faqs as $q)
             <h6>{{ $q->question }}</h6>
            {{$q->answer}}
            <hr>
            @endforeach
    </div>
</div>
