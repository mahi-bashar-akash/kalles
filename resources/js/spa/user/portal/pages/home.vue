<template>

    <!-- Slider -->
    <section class="w-100 position-relative z-0">
        <img :src="`/sliders/slider-01.webp`" class="img-fluid w-100 object-fit-cover min-height-650 max-height-650"
             alt="slider-01">
        <div
            class="position-absolute container top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-start flex-column">
            <div class="text-uppercase fw-bold mb-2 small"> summer 2025</div>
            <div class="fw-bold mb-3 fs-2"> New Arrival Collection</div>
            <a href="javascript:void(0)" class="btn btn-dark-theme border-0 rounded-0 width-160 py-2 fw-medium">
                <span class="position-relative">
                    Explore Now
                </span>
            </a>
        </div>
    </section>

    <!-- Grid -->
    <section class="w-100 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="position-relative w-100 overflow-hidden scale-effect">
                        <img :src="`/grid/grid-1.webp`"
                             class="img-fluid object-fit-cover max-height-700 min-height-700 w-100 rounded-2"
                             alt="grid 1">
                        <div class="position-absolute bottom-0 start-0 end-0 translate-middle-y text-center">
                            <a href="javascript:void(0)" class="btn btn-light-dark rounded-1 px-3 py-2 fw-medium">
                                Woman
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="row p-0">
                        <div
                            class="col-md-6 max-height-700 min-height-700 d-flex justify-content-between align-items-center flex-column">
                            <div class="position-relative w-100 overflow-hidden scale-effect">
                                <img :src="`/grid/grid-2.avif`"
                                     class="img-fluid object-fit-cover max-height-340 min-height-340 w-100 rounded-2"
                                     alt="grid-2">
                                <div class="position-absolute bottom-0 start-0 end-0 translate-middle-y text-center">
                                    <a href="javascript:void(0)"
                                       class="btn btn-light-dark rounded-1 px-3 py-2 fw-medium">
                                        Accessories
                                    </a>
                                </div>
                            </div>
                            <div class="position-relative w-100 overflow-hidden scale-effect mt-3 mt-md-0">
                                <img :src="`/grid/grid-3.jpg`"
                                     class="img-fluid object-fit-cover max-height-340 min-height-340 w-100 rounded-2"
                                     alt="grid-3">
                                <div class="position-absolute bottom-0 start-0 end-0 translate-middle-y text-center">
                                    <a href="javascript:void(0)"
                                       class="btn btn-light-dark rounded-1 px-3 py-2 fw-medium">
                                        Footwear
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative w-100 overflow-hidden scale-effect mt-3 mt-md-0">
                                <img :src="`/grid/grid-4.webp`"
                                     class="img-fluid object-fit-cover max-height-700 min-height-700 rounded-2 w-100"
                                     alt="grid-4">
                                <div class="position-absolute bottom-0 start-0 end-0 translate-middle-y text-center">
                                    <a href="javascript:void(0)"
                                       class="btn btn-light-dark rounded-1 px-3 py-2 fw-medium">
                                        Watches
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending -->
    <section class="w-100 py-5">
        <div class="container">
            <div class="text-center position-relative">
                <div class="fs-4 fw-bold text-uppercase z-1 px-2 position-relative"> trending</div>
                <div
                    class="position-absolute z-0 top-50 start-0 end-0 translate-middle-y d-flex justify-content-center align-items-center">
                    <hr class="min-width-90 border-2 border-dark">
                    <hr class="min-width-160 border-2 border-white">
                    <hr class="min-width-90 border-2 border-dark">
                </div>
            </div>
            <div class="text-center text-lowercase text-secondary fw-normal fs-6 mb-4"> Top view in this week</div>


            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-01.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-08.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-02.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-07.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-03.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-06.jpg`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-04.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-05.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-05.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-04.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-06.jpg`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-03.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-07.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-02.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-08.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-01.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
            </div>

            <div class="mt-3 text-center">
                <button type="button" class="btn btn-outline-dark rounded-pill width-160 border-2 border-dark">
                    Load More
                </button>
            </div>

        </div>
    </section>

    <!-- Other Sliders -->
    <section class="w-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 py-3">
                    <div class="w-100 position-relative overflow-hidden scale-rotate">
                        <img :src="`/sliders/slider-02.webp`" class="img-fluid object-fit-cover w-100" alt="slider 02">
                        <div
                            class="position-absolute fw-bold text-center text-white top-0 bottom-0 bg-dark bg-opacity-25 start-0 end-0 d-flex justify-content-center align-items-center flex-column fs-5">
                            <div class="text-uppercase"> LOOKBOOK 2025</div>
                            <div class="text-uppercase"> Make Love This Look</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 py-3">
                    <div class="w-100 position-relative overflow-hidden transform-up">
                        <img :src="`/sliders/slider-03.webp`" class="img-fluid object-fit-cover w-100" alt="slider 03">
                        <div
                            class="position-absolute fw-bold text-center text-white top-0 bottom-0 bg-dark bg-opacity-25 start-0 end-0 d-flex justify-content-center align-items-center flex-column fs-5">
                            <div class="text-uppercase"> LOOKBOOK 2025</div>
                            <div class="text-uppercase"> Make Love This Look</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Seller -->
    <section class="w-100 py-5">
        <div class="container">
            <div class="text-center position-relative">
                <div class="fs-4 fw-bold text-uppercase z-1 px-2 position-relative"> Best Seller</div>
                <div
                    class="position-absolute z-0 top-50 start-0 end-0 translate-middle-y d-flex justify-content-center align-items-center">
                    <hr class="min-width-80 border-2 border-dark">
                    <hr class="min-width-170 border-2 border-white">
                    <hr class="min-width-80 border-2 border-dark">
                </div>
            </div>
            <div class="text-center text-lowercase text-secondary fw-normal fs-6 mb-4"> Top sell in this week</div>


            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-01.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-08.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-02.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-07.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-03.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-06.jpg`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-04.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-05.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-05.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-04.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-06.jpg`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-03.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-07.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-02.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="position-relative effect-vanish">
                        <img :src="`/product/product-08.webp`"
                             class="img-fluid object-fit-cover w-100 min-height-370 max-height-370" alt="product">
                        <div class="position-absolute top-0 bottom-0 start-0 end-0">
                            <img :src="`/product/product-01.webp`"
                                 class="img-fluid object-fit-cover w-100 min-height-370 max-height-370 img"
                                 alt="product">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="fw-bold"> Analogue Resin Strap</div>
                        <div class="fw-medium text-secondary mt-1 small"> $30.00</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Latest from blog -->
    <section class="w-100 py-5">
        <div class="container">
            <div class="text-center position-relative">
                <div class="fs-4 fw-bold text-uppercase z-1 px-2 position-relative"> Latest from blog</div>
                <div
                    class="position-absolute z-0 top-50 start-0 end-0 translate-middle-y d-flex justify-content-center align-items-center">
                    <hr class="min-width-40 border-2 border-dark">
                    <hr class="min-width-240 border-2 border-white">
                    <hr class="min-width-40 border-2 border-dark">
                </div>
            </div>
            <div class="text-center text-lowercase text-secondary fw-normal fs-6 mb-4"> The freshest and most exciting news </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-lg-3 row-cols-xl-3">
                <div class="p-3 transform-up">
                    <div class="overflow-hidden">
                        <img :src="`/blogs/blog-01.webp`" class="img-fluid object-fit-cover w-100" alt="blog-01">
                    </div>
                    <div class="mt-3 fw-bold fs-5 truncate-to-line-2"> Spring – Summer Trending 2020 </div>
                    <div class="mt-2 fw-medium small text-secondary"> By admin on May 11, 2022 </div>
                    <div class="my-2 fw-normal small">
                        Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists,
                    </div>
                    <a href="javascript:void(0)" class="text-decoration-none text-theme-secondary"> Read more </a>
                </div>
                <div class="p-3 transform-up">
                    <div class="overflow-hidden">
                        <img :src="`/blogs/blog-02.webp`" class="img-fluid object-fit-cover w-100" alt="blog-02">
                    </div>
                    <div class="mt-3 fw-bold fs-5 truncate-to-line-2"> The Easiest Way to Break Out on Top </div>
                    <div class="mt-2 fw-medium small text-secondary"> By admin on May 11, 2022 </div>
                    <div class="my-2 fw-normal small">
                        Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists,
                    </div>
                    <a href="javascript:void(0)" class="text-decoration-none text-theme-secondary"> Read more </a>
                </div>
                <div class="p-3 transform-up">
                    <div class="overflow-hidden">
                        <img :src="`/blogs/blog-03.webp`" class="img-fluid object-fit-cover w-100" alt="blog-03">
                    </div>
                    <div class="mt-3 fw-bold fs-5 truncate-to-line-2"> Style for couple in Weeding season </div>
                    <div class="mt-2 fw-medium small text-secondary"> By admin on May 11, 2022 </div>
                    <div class="my-2 fw-normal small">
                        Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga artists,
                    </div>
                    <a href="javascript:void(0)" class="text-decoration-none text-theme-secondary"> Read more </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Follow us instagram -->
    <section class="w-100 py-5">
        <div class="container-fluid">
            <div class="text-center position-relative">
                <div class="fs-4 fw-bold text-uppercase z-1 px-2 position-relative"> Follow us instagram </div>
                <div
                    class="position-absolute z-0 top-50 start-0 end-0 translate-middle-y d-flex justify-content-center align-items-center">
                    <hr class="min-width-15 border-2 border-dark">
                    <hr class="min-width-290 border-2 border-white">
                    <hr class="min-width-15 border-2 border-dark">
                </div>
            </div>
            <div class="row mt-5">
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-01.webp`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-02.webp`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-03.webp`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-04.webp`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-05.webp`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
                <div class="p-0 col-12 col-sm-6 col-md-4 col-lg-2">
                    <img :src="`/product/product-06.jpg`" class="img-fluid object-fit-cover min-height-350 max-height-350 w-100" alt="product">
                </div>
            </div>

        </div>
    </section>

    <!-- Content of pear -->
    <section class="w-100 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4 text-center">
                <div class="py-3 px-1">
                    <div class="d-block mb-3">
                        <i class="bi bi-car-front fs-1"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-3"> FREE SHIPPING </div>
                        <div class="text-secondary small"> Free shipping on all US order or order above $100 </div>
                    </div>
                </div>
                <div class="py-3 px-1">
                    <div class="d-block mb-3">
                        <i class="bi bi-broadcast fs-1"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-3"> SUPPORT 24/7 </div>
                        <div class="text-secondary small"> Contact us 24 hours a day, 7 days a week </div>
                    </div>
                </div>
                <div class="py-3 px-1">
                    <div class="d-block mb-3">
                        <i class="bi bi-arrow-repeat fs-1"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-3"> 30 DAYS RETURN </div>
                        <div class="text-secondary small"> Simply return it within 30 days for an exchange. </div>
                    </div>
                </div>
                <div class="py-3 px-1">
                    <div class="d-block mb-3">
                        <i class="bi bi-credit-card fs-1"></i>
                    </div>
                    <div>
                        <div class="fw-bold mb-3"> 100% PAYMENT SECURE </div>
                        <div class="text-secondary small"> We ensure secure payment with PEV </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data() {
        return {}
    },
    mounted() {
    },
    methods: {}
}

</script>
