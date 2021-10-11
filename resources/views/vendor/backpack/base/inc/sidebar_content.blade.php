<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
{{--<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>--}}
{{--@if(backpack_user()->type == \App\Models\User::ADMIN)--}}
@if(backpack_user()->getRole()->name == 'admin')
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('trainers') }}"><i class="la la-users nav-icon"></i> Тренера</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('managers') }}"><i class="la la-business-time nav-icon"></i> Менеджеры</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('gyms') }}"><i class="la la-building nav-icon"></i> Спортзалы</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('clients') }}"><i class="la la-user-friends nav-icon"></i> Клиенты</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('subscriptions') }}"><i class="la la-money nav-icon"></i> Абонементы</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('money') }}"><i class="la la-money-bill-wave-alt nav-icon"></i> Операции</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user/roles') }}"><i class="la la-business-time nav-icon"></i> Роли</a></li>
{{--@elseif(backpack_user()->type == \App\Models\User::MANAGER)--}}
@elseif(backpack_user()->getRole()->name == 'manager')
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('needed-trainers') }}"><i class="la la-users nav-icon"></i> Тренера</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('gym-clients') }}"><i class="la la-user-friends nav-icon"></i> Клиенты</a></li>
{{--@elseif(backpack_user()->type == \App\Models\User::TRAINER)--}}
@elseif(backpack_user()->getRole()->name == 'trainer')
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('personal-clients') }}"><i class="la la-user-friends nav-icon"></i> Клиенты</a></li>
@endif

