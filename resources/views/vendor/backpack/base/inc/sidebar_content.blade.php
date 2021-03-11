<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<p class="text text-danger pt-4 font-weight-bolder">Tableau de bord</p>
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>
<p class="text text-danger pt-4 font-weight-bolder">Menu des fonctionnalités</p>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('activite') }}'>
    <i class='nav-icon la la-tasks'></i> Activites</a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('actualite') }}'>
        <i class='nav-icon la la-newspaper'></i> Actualites</a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('image') }}'>
        <i class='nav-icon la la-image'></i> Images</a>
</li>

<li class='nav-item'>
    <a class='nav-link' href='{{ backpack_url('video') }}'>
        <i class='nav-icon la la-file-movie-o'></i> Videos
    </a>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('projet') }}'>
        <i class='nav-icon la la-project-diagram'></i> Projets</a>
</li>

{{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('bilanactivite') }}'>
        <i class='nav-icon la la-product-hunt'></i> Bilan des activites</a>
</li>--}}

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('bilancovid') }}'>
        <i class='nav-icon la la-heart-broken'></i> Information COVID-19</a>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('informations') }}'>
        <i class='nav-icon la la-info'></i> Informations</a>
</li>

{{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('detailactivite') }}'><i class='nav-icon la la-question'></i> DetailActivites</a></li>--}}
