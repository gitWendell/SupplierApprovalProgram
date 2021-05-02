@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item color-gray">
                    <span class="page-link bg-secondary text-white">Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" wire:click='previousPage' style="cursor:pointer">Previous</a>
                </li>
            @endif
   
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" wire:click='nextPage' style="cursor:pointer">Next</a>
                </li>
            @else
                <li class="page-item">
                    <span class="page-link bg-secondary text-white">Next</span>
                </li>
            @endif
        </ul>
      </nav>
@endif