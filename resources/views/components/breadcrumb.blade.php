  <ul class="my-0 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
      @foreach ($items as $item)
          @if ($item['url'])
              <li class="breadcrumb-item text-muted">
                  <a href="{{ $item['url'] }}" class="text-muted text-hover-primary">{{ $item['name'] }}</a>
              </li>
          @else
              <li class="breadcrumb-item text-muted">{{ $item['name'] }}</li>
          @endif

          @if (!$loop->last)
              <li class="breadcrumb-item">
                  <span class="bg-gray-400 bullet w-5px h-2px"></span>
              </li>
          @endif
      @endforeach
  </ul>
