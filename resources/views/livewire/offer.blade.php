<div class="row col-lg-12  py-2">

@if($offers)


    @foreach($offers as $offer)

    <div id="{{ $offer->id }}" class="  card  p-0 m-0 mb-1 shadow-sm">

        <div class="card-body m-auto w-100 d-flex  border-bottom  ">
            <img src="{{ '/storage/images/'.$offer->user->image }}" alt="" class="card-img-top rounded-circle m-auto " style="width: 3rem; height:3rem ; " srcset="">
            <div class="mx-2 w-100 ">
            <h6 class="m-auto "><a class="nav-link p-0 m-0 h5" href="{{ url('user', $offer->user->username) }}"> {{ $offer->user->name}} </a></h6>
                <div class="d-inline-block justify-content-start">
                    <livewire:dt-carbon :dt="$offer->created_at" >
                        <span class="text-muted m-auto  p-0 px-2  " style="font-size: 0.9rem;"><i class="bx bx-briefcase  " style="font-size: 0.9rem;" ></i>  {{ ($offer->user->departement ? $offer->user->departement->name :'') }}  </span>
                </div>
            </div>
            <div class="float-end">
            <button type="button" class="btn  dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="bi bi-three-dots-vertical"></span>
            </button>

            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="#">ابلاغ</a></li>
            </ul>
            </div>
        </div>

        <div class="card-body">
        <p class="card-text ">{{ $offer->description }}</p>
        </div>
        @guest


        @else
           @if($offer->open_work->user_id == Auth::user()->id or $offer->user_id == Auth::user()->id )

                <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                السعر :  <span class="fw-bold "> {{ $offer->pric }} </span> ريال يمني
                            </div>
                            <div class="col-6">
                            انجاز العمل في  <span class="fw-bold ">   {{ $offer->num_day }} </span> ايام
                            </div>

                        </div>
                </div>


            @endif
                <div class="card-footer bg-white">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                    @if($offer->open_work->user_id == Auth::user()->id and $offer->open_work->stage == '1'  )
                    <form action="{{ route('offer.acceptOffer') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $offer->id }}">
                        <button type="submit" class="btn btn-primary float-end"   >
                           قبول العرض
                        </button>
                    </form>
                    @endif

                    
                    @if($offer->open_work->stage == '2' )
                    <h6 class="text-success">تم الموافقة </h6>
                    @endif
                    @if($offer->open_work->stage == '3' )
                    <h6 class="text-success">مكتمل </h6>
                    @endif

                </div>
       
        @endguest
    </div>

    @endforeach


        {{ $offers->links() }}

@endif





</div>
