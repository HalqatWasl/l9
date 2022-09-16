<div class="text-end  a" style="width: fit-content;">
                <div class="dropdown ms-3  ">

                    <button  wire:ignore.self  wire:poll class="btn  rounded-circle  p-0  postion-relative " wire:click='notificationclick'  type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="true">
                        <span class="position-absolute  {{ (Auth::user()->unreadNotifications->count() >= 1  ?  '': 'd-none') }} translate-middle p-1   bg-danger badge border border-primary rounded-circle  " style="top:13px; right: 80%;">
                            <span class="visually-hidden"></span>{{ Auth::user()->unreadNotifications->count() }}
                        </span>
                        <span class="bi bi-bell text-white rounded-circle rounded-circle p-0 m-0" style="font-size: 25px;"></span>
                    </button>

                    <ul wire:ignore.self class="dropdown-menu     " aria-labelledby="dropdownMenuButtonSM" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-22px, 50px);">
                        <li class="notification-item" ><h6 class="dropdown-header">الاشعارات</h6></li>


                        @foreach($notifications  as $not)
                        <li> <hr class="dropdown-divider m-0 p-0"> </li>
                            <li>
                                <div class="dropdown-item d-flex align-items-center px-4 py-3   {{ ($not->readNotification ?  'read_at': '') }} " href="#">
                                    <i class="bi  {{ $not->data['icon'] }}  mx-2 pe-3 " style="font-size: 24px;"></i>
                                    <div class="m-0 me-1">
                                        <h6 class="m-0  ">{{  $not->data['title'] }} {{ $not->unreadNotifications }}</h6>
                                        <p class="m-0"><a href="{{ url('user', $not->data['username']) }}" class="text-primary text-decoration-underline" >{{  $not->data['user'] }}</a> {!!  $not->data['body'] !!}  </p>
                                         <p class="m-0"> {{ \Carbon\Carbon::parse($not->created_at)->locale('ar_AR')->diffForHumans(); }}</p>
                                   </div>
                                </div>
                           </li>

                        @endforeach


                        <li> <hr class="dropdown-divider m-0 p-0"> </li>

                        <li class="dropdown-header text-center ">
                              قراءة كل الاشعارات
                            <a  class="btn" wire:click='markAsRead'><span class="badge rounded-pill bg-primary p-2 ms-2"> نعم</span></a>
                        </li>
                        </div>
                       </li>


                    </ul>
                </div>
            </div>
