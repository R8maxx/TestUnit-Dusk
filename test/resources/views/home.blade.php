@extends('plantilla.main')
@section('title','Home')

@section('main')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="carousel slide" id="principal-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#principal-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#principal-carousel" data-slide-to="1" ></li>
                        <li data-target="#principal-carousel" data-slide-to="2" ></li>
                        <li data-target="#principal-carousel" data-slide-to="3" ></li>
                        <li data-target="#principal-carousel" data-slide-to="4" ></li>
                        <li data-target="#principal-carousel" data-slide-to="5" ></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption d-block">
                                <h4>Lorem</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur facilisis dui, vel tempus sem sagittis vel. Donec ultricies purus urna, at congue dui congue id. Integer vestibulum sem ut urna maximus, sed cursus nisi mollis. Aliquam ultrices augue sit amet nibh gravida, eget consequat diam pharetra. Pellentesque finibus mi eu orci fermentum auctor. Cras in mauris a velit gravida hendrerit. Duis feugiat turpis id justo aliquet egestas eget congue sapien. Nam finibus tincidunt ex, ac lobortis turpis aliquet id. Curabitur ante tellus, pellentesque eget pulvinar sed, consequat in sapien.</p>
                            </div>
                            <img src="https://picsum.photos/1920/600" alt="imagen" class="img-fluid d-block">
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Lorem</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur facilisis dui, vel tempus sem sagittis vel. Donec ultricies purus urna, at congue dui congue id. Integer vestibulum sem ut urna maximus, sed cursus nisi mollis. Aliquam ultrices augue sit amet nibh gravida, eget consequat diam pharetra. Pellentesque finibus mi eu orci fermentum auctor. Cras in mauris a velit gravida hendrerit. Duis feugiat turpis id justo aliquet egestas eget congue sapien. Nam finibus tincidunt ex, ac lobortis turpis aliquet id. Curabitur ante tellus, pellentesque eget pulvinar sed, consequat in sapien..</p>
                            </div>
                            <img src="https://picsum.photos/1920/600" alt="imagen" class="img-fluid d-block">
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Lorem</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur facilisis dui, vel tempus sem sagittis vel. Donec ultricies purus urna, at congue dui congue id. Integer vestibulum sem ut urna maximus, sed cursus nisi mollis. Aliquam ultrices augue sit amet nibh gravida, eget consequat diam pharetra. Pellentesque finibus mi eu orci fermentum auctor. Cras in mauris a velit gravida hendrerit. Duis feugiat turpis id justo aliquet egestas eget congue sapien. Nam finibus tincidunt ex, ac lobortis turpis aliquet id. Curabitur ante tellus, pellentesque eget pulvinar sed, consequat in sapien..</p>
                            </div>
                            <img src="https://picsum.photos/1920/600" alt="imagen" class="img-fluid d-block">
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Lorem</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur facilisis dui, vel tempus sem sagittis vel. Donec ultricies purus urna, at congue dui congue id. Integer vestibulum sem ut urna maximus, sed cursus nisi mollis. Aliquam ultrices augue sit amet nibh gravida, eget consequat diam pharetra. Pellentesque finibus mi eu orci fermentum auctor. Cras in mauris a velit gravida hendrerit. Duis feugiat turpis id justo aliquet egestas eget congue sapien. Nam finibus tincidunt ex, ac lobortis turpis aliquet id. Curabitur ante tellus, pellentesque eget pulvinar sed, consequat in sapien.</p>
                            </div>
                            <img src="https://picsum.photos/1920/600" alt="imagen" class="img-fluid d-block">
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Lorem</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur facilisis dui, vel tempus sem sagittis vel. Donec ultricies purus urna, at congue dui congue id. Integer vestibulum sem ut urna maximus, sed cursus nisi mollis. Aliquam ultrices augue sit amet nibh gravida, eget consequat diam pharetra. Pellentesque finibus mi eu orci fermentum auctor. Cras in mauris a velit gravida hendrerit. Duis feugiat turpis id justo aliquet egestas eget congue sapien. Nam finibus tincidunt ex, ac lobortis turpis aliquet id. Curabitur ante tellus, pellentesque eget pulvinar sed, consequat in sapien..</p>
                            </div>
                            <img src="https://picsum.photos/1920/600" alt="imagen" class="img-fluid d-block">
                        </div>

                        <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="https://picsum.photos/1000/600" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Titulo</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius ante non vulputate commodo. Donec dictum felis quis elit suscipit commodo. Phasellus quis vehicula nibh. Integer non diam vitae tortor convallis commodo. Aliquam iaculis varius ipsum, et venenatis orci consectetur et. In et facilisis ipsum. Sed in augue ut enim sodales maximus eget vitae ante. Phasellus scelerisque arcu sit amet libero vestibulum, et mattis odio congue. Aenean iaculis pretium consectetur. Nulla efficitur, sapien vitae rutrum gravida, mi leo convallis justo, ac efficitur nisi metus id ante. Sed ultrices ipsum at dui aliquet convallis.

                            Aenean vitae lacus ligula. Curabitur quis finibus dui, ac imperdiet ante. Donec efficitur turpis vel dui finibus rhoncus. Curabitur rhoncus quis ligula eget mattis. Integer sapien ipsum, condimentum vitae felis id, mollis porta mauris. Pellentesque facilisis ut lacus et tincidunt. Curabitur sit amet iaculis sapien. Integer a posuere erat. Praesent id vehicula nisi. Fusce at eros ut turpis maximus egestas. Quisque molestie vitae elit eget posuere. Sed luctus ut enim ac fermentum.

                            Fusce sodales magna at venenatis placerat. Quisque porta viverra libero, fringilla congue lacus posuere vitae. Pellentesque tellus ex, feugiat eu eleifend vel, tempus ornare nulla. Mauris ac magna ut tortor posuere pellentesque. Praesent et fringilla quam. Vestibulum pulvinar mi at massa vulputate venenatis. Proin ultrices ultrices feugiat. Quisque non tellus rutrum, maximus nibh eget, consequat eros. Integer finibus, justo a volutpat ultricies, quam sapien fermentum augue, id maximus velit nisi in metus. Donec sem tellus, sollicitudin ut dolor id, imperdiet molestie tellus. Donec pretium lacus at nibh fermentum, a iaculis mi tincidunt. Etiam ipsum dolor, semper a vestibulum non, pulvinar eu lorem. Sed leo purus, lobortis ac consectetur quis, tristique sit amet risus.

                            Donec sodales, sem consequat malesuada consectetur, tortor orci aliquet nulla, in euismod felis libero non augue. Pellentesque dapibus enim nec molestie bibendum. Donec vulputate leo vel ex ultrices lacinia. Sed in lorem id mauris imperdiet maximus. Ut molestie accumsan nisl non imperdiet. Fusce gravida nibh vel fermentum pellentesque. Quisque augue metus, faucibus et lorem nec, feugiat tincidunt metus.

                            Proin magna quam, luctus ac aliquam in, porta sit amet ligula. Morbi dignissim eros risus, quis eleifend lorem pharetra vel. Integer accumsan diam in sapien porta hendrerit. Sed risus quam, porta sed leo vel, condimentum posuere purus. Maecenas id ante auctor, blandit nibh vel, vehicula libero. Etiam sapien mauris, tempus non rhoncus et, ultricies et nunc. Aliquam maximus dolor a felis fermentum, vel interdum lectus cursus. Morbi pulvinar, nunc laoreet ultricies semper, urna velit fringilla ex, vel facilisis turpis eros eu justo. Nam volutpat gravida nulla, sed placerat odio vehicula at. Cras eu congue nunc, vel consectetur ipsum. Pellentesque gravida arcu risus, non faucibus metus tincidunt condimentum. Duis sit amet auctor lorem.</p>
                        <a href="#" class="btn btn-primary btn-lg btn-block">Boton</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
