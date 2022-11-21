<div class="w-100 py-3 d-flex justify-content-center" style="background-color: rgb(247, 187, 58)">
    <h2 class="text-white">Giant Book Supplier</h2>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-center w-100">
            <li class="nav-item mx-4">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item mx-4 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($navbarCat as $n)
                        <a class="dropdown-item" href="{{url('bookByCategory/'.$n->id)}}">{{$n->name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="{{url('publisher')}}">Publisher</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
    </div>

</nav>
