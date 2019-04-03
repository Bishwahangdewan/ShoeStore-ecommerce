@extends('layout.header')

    @section('content')

    @if(count($item) > 0)
    @foreach($item as $oneitem)
    <div class="home-container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="/img/{{$oneitem->img}}">
                </div>
                <div class="col-md-6 pl-5">
                    <h1 class="display-4 mb-3">{{$oneitem->name}}</h1>
                    <div class="d-flex flex-column flex-sm-row justify-content-between">
                        <ul class="list-inline">
                            <li class="list-inline-item h4">$:{{$oneitem->price}}</li>
                            <li class="list-inline-item h4"><del>$90</del></li>
                        </ul>
                        
                        <div class="d-flex">
                            <ul class="list-inline">
                            <li class="list-inline-item text-primary"><i class="fas fa-star"></i></li>
                            <li class="list-inline-item text-primary"><i class="fas fa-star"></i></li>
                            <li class="list-inline-item text-primary"><i class="fas fa-star"></i></li>
                            <li class="list-inline-item text-primary"><i class="fas fa-star"></i></li>
                            <li class="list-inline-item text-primary"><i class="far fa-star"></i></li>
                        </ul>
                        </div>
                    </div>
        
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt rem hic animi impedit tenetur, necessitatibus debitis dolores, molestias, nesciunt vitae nemo ex. Voluptatem culpa modi, quis corporis sequi. Accusantium, eum.</p>
        
                        <form method="GET" action="/cart" class='pt-4' id="itemdetail">
                            <div class="row">
                                <div class="col-lg-12 detail-option">
                                    <h6 class="detail-option-heading">Size<span>(required)</span></h6>
                                    <label for="size_0" class="btn  btn-outline-secondary detail-option-btn-label " aria-pressed="true"> Small 
                                    <input type="radio" name="size" value="small" id="size_0" required>
                                    </label>
                                    
                                    <label for="size_1" class="btn  btn-outline-secondary detail-option-btn-label
                                     " aria-pressed="true"> Medium
                                    <input type="radio" name="size" value="medium" id="size_1" required>
        
                                    </label>
                                    
                                    <label for="size_2" class="btn  btn-outline-secondary detail-option-btn-label " aria-pressed="true"> Large
                                    <input type="radio" name="size" value="large" id="size_2" required>
                                    </label>
                                    
                                </div>
        
                                <div class="col-lg-12 pt-4">
                                    <h6 class="detail-option-heading">Quantity<span>(required)</span></h6>
                                        <input type="number" name="items" value="1" class="form-control">
                                </div>

                                <input type="text" class="invisible" name="product_id" value="{{$oneitem->id}}">
        
                                <div class="col-lg-12 pt-4">
                                    
                                    <input type="submit" name="submit" value="Add to cart" class="btn btn-lg btn-outline-secondary">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            </div>
        
            <!--PRODUCT DESCRIPTION-->
            <section class="my-5">
                            <div class="container">
                                <ul class="nav nav-tabs flex-column flex-sm-row">
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#description" class="nav-link detail-nav-link active" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#additionalinformation" class="nav-link detail-nav-link" aria-selected="false">Additional Information</a>
                                    </li>
                                </ul>
                                <div class="tab-content py-3">
                                    <div id="description" class="tab-pane active">
                                        <p class="lead">{{$oneitem->description}}</p>
                                    </div>
                                
        
                                    <div id="additionalinformation" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class = "table">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-uppercase">FOR</th>
                                                            <td class="text-muted">{{$oneitem->gender}}</td>
                                                        </tr>
        
                                                        <tr>
                                                            <th class="text-uppercase">BRAND</th>
                                                            <td class="text-muted">{{$oneitem->brand}}</td>
                                                        </tr>
        
                                                        <tr>
                                                            <th class="text-uppercase">LIFESTYLE</th>
                                                            <td class="text-muted">{{$oneitem->type}}</td>
                                                        </tr>
        
                                                        <tr>
                                                            <th class="text-uppercase">MATERIAL</th>
                                                            <td class="text-muted">{{$oneitem->material}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                </div>
                            </div>
                        </section>

                        @endforeach
                        @endif

        @endsection
