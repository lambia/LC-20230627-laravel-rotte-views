<header>
    <img src="{{$logo}}" class="logo" alt="Laravel Logo">
    @foreach($links as $link)
        <a href="{{$link["href"]}}">{{$link["text"]}}</a>
    @endforeach
</header>