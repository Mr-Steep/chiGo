@props(['categories'])
<div class="nm-shop-header has-categories no-filters no-sidebar no-search centered">
    <div class="nm-shop-menu list-spaced thumbnails-top">
        <div class="nm-row">
            <div class="col-xs-12">
                <div id="nm-shop-filter-menu-wrap">
                    <ul id="nm-shop-filter-menu" class="nm-shop-filter-menu">
                        <li class="nm-shop-categories-btn-wrap" data-panel="cat">
                            <a href="#categories" class="invert-color">Categories</a>
                        </li>
                    </ul>
                </div>
                <div id="nm-shop-categories-wrap">
                    <ul id="nm-shop-categories" class="nm-shop-categories">
                        <li class="current-cat"><a href="https://savoy.nordicmade.com/?cat_center=1"><img
                                    src="https://savoy.nordicmade.com/wp-content/uploads/2020/12/category-icon-all.jpg"
                                    width="46" height="46" alt="">All</a></li>
                        @foreach($categories as $category)
                            <li class="cat-item-23">
                                <span class="nm-shop-categories-divider">⁄</span>
                                <a href="#">
                                    <img class="grayscale" src=" {{$category->image2}}" width="46" height="46" alt="">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
