<div class="box">
    <div class="content">
        <p class="title">{{ __('Social Media Profile Links') }}</p>
        <hr>
        <ul>
            @foreach ($allLinks as $link)
            <li>
                <h6>{{ ucfirst($link->name) }}</h6>
            </li>
            <a href="{{$link->url}}">{{$link->url}}</a>
            <hr>
            @endforeach
        </ul>
    </div>
</div>
