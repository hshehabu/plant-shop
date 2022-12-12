<div>
  <ul class="breadcrumbs">
                    <li class="breadcrumb-item pl-0">
                        <a href="/">Home</a>
                    </li>
                    @foreach ($paths as $path)
                    <li class="breadcrumb-item pl-0 text-capitalize 
                    {{ $loop->last ? 'active' : '' }}">
                        <a href="{{ url($path) }}">
                            {{ str_replace('-', ' ', $path) }}
                        </a>
                    </li>
                    @endforeach
    </ul>
</div>