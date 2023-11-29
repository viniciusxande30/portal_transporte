<div class="ts-pagination text-center mb-10 mt-20">
  <ul class="pagination">
    <!-- Previous Page Link -->
    @if (!$paginator->onFirstPage())
    <li><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
    <!-- "Three Dots" Separator -->
    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif

    <!-- Array Of Links -->
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="active"><a href="#">{{ $page }}</a></li>
    @else
    <li><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
    <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
    @endif
  </ul>
</div>
