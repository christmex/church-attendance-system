{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('attendance') }}"><i class="nav-icon la la-question"></i> Attendances</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('congregation') }}"><i class="nav-icon la la-question"></i> Congregations</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('congregation-status') }}"><i class="nav-icon la la-question"></i> Congregation statuses</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('family-status') }}"><i class="nav-icon la la-question"></i> Family statuses</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('congregation-family') }}"><i class="nav-icon la la-question"></i> Congregation families</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('family') }}"><i class="nav-icon la la-question"></i> Families</a></li> -->