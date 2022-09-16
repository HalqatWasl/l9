<nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-muted"><span class="bi bi-house-door"></span> <span class=" d-none  d-lg-inline
      ">الرئيسية</span></a></li>
      @foreach($currentPath as $path)
            <li class="breadcrumb-item   {{ $loop->last ? 'active' : ''}}">
                <a class="text-muted  {{ $loop->last ? 'text-primary' : ''}}" href="{{ url($path) }}">
                {{ $dataUrl[str_replace('_',' ',$path)] }}
                </a>
            </li>
      @endforeach
    </ol>
    <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
        @foreach(Request::segments() as $path)
              <li class="breadcrumb-item   {{ $loop->last ? 'active' : ''}}">
                  <a href="{{ url($path) }}">
                      {{ $dataUrl[str_replace('_',' ',$path)] }}
                  </a>
              </li>
        @endforeach
      </ol> -->
</nav>
