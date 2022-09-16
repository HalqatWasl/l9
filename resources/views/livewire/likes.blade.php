<div class="card-footer bg-white">
    <span class="text-muted m-auto " wire:poll>  {{ $like_count }}  اعجاب</span>
    <div  class="d-flex justify-content-start  fs-2">
       <span  wire:click="$emitUp('postAdded')"> <span  class="bi  {{ ($heart_fill == '1'  ?  'bi-heart-fill text-danger': 'bi-heart') }} " ></span></span>

        <!-- <span class="bi bi-gear float-end "></span> -->
    </div>
</div>
