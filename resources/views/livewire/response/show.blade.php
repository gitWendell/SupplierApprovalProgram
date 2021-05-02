<div class="container">
    <h2>Responses</h2>
    <div class="comment-widgets p-3">
        <!-- Comment Row -->
        @foreach ($responses as $key => $response)
            <div class="d-flex flex-row comment-row p-2 mb-4 bg-light rounded">
                <div class="p-2">
                    <div style="padding: 15px; border-radius: 100px; text-align: center; background: lightgrey;">
                        {{count($responses)-$key}}
                    </div>
                </div>
                <div class="comment-text w-100">
                    <h6 class="font-medium"><strong>{{$response->title}}</strong></h6>
                    <span class="m-b-15 d-block">{{$response->comment}}</span>
                    <div class="comment-footer"> 
                        <span class="text-muted float-right">{{$response->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </div> <!-- Comment Row -->
        @endforeach
        @if (count($responses) == 0)
            <div class="d-flex flex-row comment-row p-4 mb-4 bg-light rounded">
                <h6>No response yet</h6>
            </div>
        @endif
    </div> <!-- Card -->
    {{-- @include('livewire.response.create') --}}
</div>