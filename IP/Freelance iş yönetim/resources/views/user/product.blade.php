<section class="section courses" id="courses" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h6>Aktif İlanlar</h6>
                    <h2>Aktif İlanlar</h2>
                </div>
            </div>
        </div>
        <div class="ilanlar section" id="ilanlar">
        @foreach($data as $product)
        <ul class="event_filter">
            <li>
                <a class="is_active" href="#!" data-filter="*">Show All</a>
            </li>
            <li>
                <a href="#!" data-filter=".design">Webdesign</a>
            </li>
            <li>
                <a href="#!" data-filter=".development">Development</a>
            </li>
            <li>
                <a href="#!" data-filter=".wordpress">Wordpress</a>
            </li>
        </ul>
        <div class="row event_box">
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                <div class="events_item">
                    <div class="thumb">
                        <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
                        <span class="category">Mobile Programlama</span>
                        <span class="price"><h6><em>$</em>{{$product->price}}</h6></span>
                    </div>
                    <div class="down-content">
                        <span class="author">Stella Blair</span>
                        <h4>{{$product->title}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
                <div class="events_item">
                    <div class="thumb">
                        <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
                        <span class="category">Development</span>
                        <span class="price"><h6><em>$</em>340</h6></span>
                    </div>
                    <div class="down-content">
                        <span class="author">Cindy Walker</span>
                        <h4>Web Development Tips</h4>
                    </div>
                </div>
            </div>
        </div>
            @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
