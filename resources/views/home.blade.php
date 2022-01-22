@extends('layouts.app')
@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="slide active">
        <div class="content">
            <img src="images/content-img-1.png" alt="">
            <span>new arrivals 2022</span>
            <h3>cosmetics</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/home-img-1.png" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="images/content-img-2.png" alt="">
            <span>new arrivals 2022</span>
            <h3>accessories</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/home-img-2.png" alt="">
        </div>
    </div>

    <div class="slide">
        <div class="content">
            <img src="images/content-img-3.png" alt="">
            <span>new collections</span>
            <h3>skin care</h3>
            <a href="#" class="btn">read more</a>
            <div class="controls">
                <div class="fas fa-angle-left" onclick="prev()"></div>
                <div class="fas fa-angle-right" onclick="next()"></div>
            </div>
        </div>
        <div class="image">
            <img src="images/home-img-3.png" alt="">
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- category section starts  -->

<section class="category">

    <a href="#" class="box">
        <img src="images/category-1.png" alt="">
        <p>cosmetics</p>
    </a>

    <a href="#" class="box">
        <img src="images/category-2.png" alt="">
        <p>makeup</p>
    </a>

    <a href="#" class="box">
        <img src="images/category-3.png" alt="">
        <p>powder</p>
    </a>

    <a href="#" class="box">
        <img src="images/category-4.png" alt="">
        <p>lotions</p>
    </a>

    <a href="#" class="box">
        <img src="images/category-5.png" alt="">
        <p>lipstick</p>
    </a>

    <a href="#" class="box">
        <img src="images/category-6.png" alt="">
        <p>mascara</p>
    </a>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="content">
        <span>why choose us?</span>
        <h3>makeup makes difference</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum explicabo, quos voluptate incidunt illo, blanditiis, accusamus ut quisquam quia sapiente iure. Rerum earum corrupti neque, nobis ratione obcaecati voluptatem fuga.</p>
        <a href="#" class="btn">read more</a>
    </div>
    
</section>

<!-- about section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <div class="heading">
        <h1>featured products</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="swiper products-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-1.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-3.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-4.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-5.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-6.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-7.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <span class="discount">-25%</span>
                    <img src="images/product-8.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <div class="heading">
        <h1>our gallery</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="lightbox">
        <a href="images/img-1.jpg"><img src="images/img-1.jpg" alt=""></a>
        <a href="images/img-2.jpg"><img src="images/img-2.jpg" alt=""></a>
        <a href="images/img-3.jpg"><img src="images/img-3.jpg" alt=""></a>
        <a href="images/img-4.jpg"><img src="images/img-4.jpg" alt=""></a>
        <a href="images/img-5.jpg"><img src="images/img-5.jpg" alt=""></a>
        <a href="images/img-6.jpg"><img src="images/img-6.jpg" alt=""></a>
    </div>

</section>

<!-- gallery section ends -->

<!-- team section starts  -->

<section class="team" id="team">

    <div class="heading">
        <h1>our team</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/team-1.png" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="content">
                <h3>sana shaikh</h3>
                <p>make-up artist</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/team-2.png" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="content">
                <h3>sana shaikh</h3>
                <p>make-up artist</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/team-3.png" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="content">
                <h3>sana shaikh</h3>
                <p>make-up artist</p>
            </div>
        </div>

    </div>

</section>

<!-- team section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <div class="heading">
        <h1>new arrivals</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-1.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-2.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-3.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-4.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-5.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-6.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-7.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/arrival-8.jpg" alt="">
                </div>
                <div class="content">
                    <p>beauty products</p>
                    <div class="price">$49.99 <span>$79.99</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
    
</section>

<!-- arrivals section ends -->

<!-- reviews section starts  -->

<section class="reviews">

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div>

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum similique, numquam non, quasi, voluptatibus perspiciatis fugiat incidunt veniam nulla in aut aliquid necessitatibus nobis reiciendis ullam explicabo. Nulla, rem adipisci.</p>
            </div>

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit aliquid mollitia voluptatem alias illo officiis.</p>
            </div>

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div>

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sequi minima sed obcaecati iste beatae quo praesentium, deleniti earum velit labore nobis voluptates a quam veniam delectus fugiat! Saepe, eos!</p>
            </div>

            <div class="swiper-slide slide">
                <div class="user">
                    <img src="images/pic-6.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quis ipsa aspernatur incidunt iusto veniam cumque error quaerat officia. Aspernatur?</p>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends  -->

<!-- service section starts  -->

<section class="service">

    <div class="box">
        <img src="images/service-1.png" alt="">
        <h3>free shipping</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>

    <div class="box">
        <img src="images/service-2.png" alt="">
        <h3>secure payment</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>

    <div class="box">
        <img src="images/service-3.png" alt="">
        <h3>2/4 support</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugit?</p>
    </div>

</section>

<!-- service section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <div class="heading">
        <h1>our daily blogs</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequuntur officia beatae distinctio minus optio?</p>
    </div>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-5.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                    <div class="icons">
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        <a href="#"> <i class="fas fa-clock"></i> 21st may, 2021 </a>
                    </div>
                </div>
                <div class="content">
                    <h3>blog title goes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, debitis?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- blogs section ends -->
@endsection