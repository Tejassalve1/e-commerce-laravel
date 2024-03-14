<?php
use App\Http\Controllers\productcontroller;
$total = 0;
if (Session::has('user')) {
    $total=productcontroller::cartItem();
}
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">e-commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">orders</a>
                </li>

                <form action="/search" class="d-flex" role="search">
                    <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            <ul class="navbar-nav me-right mb-2 mb-lg-0">
              @if (Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{Session::get('user')['name']}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/logout">logout</a></li>
                    </ul>
                </li>                    
                @else
                    <li><a href="/login">login</a></li>
                @endif
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cartlist">cart Item ({{$total}})</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
