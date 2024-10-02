<x-style />

<body style="background-color: #FBFBFB">
    <x-navbar />
    {{-- @yield('content') --}}

    <div style="position: relative;">
        <img style="padding-bottom: 1px" class="bg-section" src="{{ asset('image/bg1.png') }}" alt="">

        <svg style="position: absolute; bottom: 1%; left: 0; width: 100%; height: auto;z-index:1" width="1920"
            height="187" viewBox="0 0 1920 187" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.71"
                d="M1920 102.372V0C1920 0 1794 34 1681.5 37C1569 40 1520 2.5 1431 9C1342 15.5 1293 57.5 1196 69C1099 80.5 1055 25.0522 960.5 22C866 18.9478 743.574 78.1266 722.229 80.5511C700.884 82.9756 578.756 99.1389 409.885 33.6777C241.013 -31.7835 0 48.5729 0 48.5729V186.23H1920L1920 102.372Z"
                fill="#12648C" />
        </svg>


        <svg style="position: absolute; bottom: 1%; left: 0; width: 100%; height: auto;z-index:2" width="1920"
            height="233" viewBox="0 0 1920 233" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.74"
                d="M0 148.371L0 23.1774C0 23.1774 168.655 75.3258 190 77.7503C211.345 80.1748 322.744 143.211 491.615 77.7503C660.487 12.2891 835.5 96.1455 905 94.5726C974.5 92.9998 1005.5 55.5726 1123.5 55.5726C1241.5 55.5726 1306.5 69.5 1306.5 69.5C1306.5 69.5 1404 88.0002 1491 88.0002C1578 88.0002 1798.5 40.8546 1859.5 19.9273C1920.5 -1.00001 1920 -2.01473e-05 1920 -2.01473e-05V69.5L1920.5 232.23H1620.38H1440.25H960H0L0 148.371Z"
                fill="#04455D" />
        </svg>

        <svg style="position: absolute; bottom: 0; left: 0; width: 100%; height: auto;z-index:3" width="1920"
            height="156" viewBox="0 0 1920 156" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 67.222C0 67.222 102.404 31.6029 189.406 37.8093C276.409 44.0156 450.684 86.6507 468.517 87.9999C486.35 89.3491 549.575 105.809 718.446 40.2378C887.318 -25.3338 938 8.72155 960 18.1108C982 27.5 1102 76.5 1150.5 77.5C1199 78.5 1290 37.8892 1376.5 28C1463 18.1108 1495 57.5 1618.5 56C1742 54.5 1914 10 1917 9C1920 8 1920 9.5 1920 9.5V99.5V156H960H0L0 67.222Z"
                fill="#F8F8F8" />
        </svg>

    </div>

    <section class="py-5" style="background: linear-gradient(360deg, #FCFCFC 0%, #F8F8F8 100%)">
        <div class="d-flex justify-content-center py-5">
            <div class="col-6 py-5">
                <div class="card shadow-sm pt-4 pb-3 px-4 border-0" style="border-radius: 15px">

                    <h2 class="text-primary fw-bold">Cek Resi</h2>
                    <div class="card-body px-0 d-flex justify-content-between flex-wrap">
                        <div class="col-10 border border-1" style="border-radius: 10px">

                            <div class=" d-flex justify-content-between flex-wrap">
                                <div class="col-10 ps-1">
                                    <input placeholder="Please enter your waybill number. Available up to 10 waybills."
                                        type="text" class="form-control border-0 ">
                                </div>
                                <div class="col-2 text-end">
                                    <button class="btn"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col text-end ps-3">
                            <button class="btn btn-secondary w-100 ">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 container" style="background-color: #FCFCFC">
        <h2 class="text-center mt-3 fw-bold color-primary mb-5"><span style="border-radius: 8px"
                class="bg-primary color-secondary px-2 py-1 ">About</span> Us</h2>

        <div class="d-flex flex-wrap justify-content-between align-items-start pt-3">
            <div class="col-4 text-center">
                <img class="img-fluid" style="height: 300px" src="{{ asset('image/img.png') }}" alt="">
            </div>
            <div class="col-7">
                <h2 class="fw-bold">
                    International Freight Forwarder
                </h2>
                <h5>
                    Lorem ipsum dolor sit amet consectetur. In ac non massa vulputate. Augue tincidunt lacus etiam purus
                    arcu ultrices ultricies lectus risus. Nunc risus arcu sit feugiat purus egestas. Id adipiscing
                    mattis amet sagittis in sit consequat dolor.
                </h5>
            </div>
        </div>
    </section>


    <section style="padding-top: 240px">

        <div class="mt-5 pt-3" style="position: relative;">

            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-1"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-2"></div>
            <div style="position: absolute; bottom: 0; left: 0;" class="wave wave-3"></div>
        </div>
    </section>

    <section>
        <div class="container pt-3 pb-5">

            <h2 class="text-center  fw-bold color-primary mb-5">Our <span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">Services</span></h2>

            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and
                                make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and
                                make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and
                                make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-3 mb-4 px-3">
                    <div class="card px-2 shadow-sm border-0" style="border-radius: 20px">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-center">

                                <div class="card bg-secondary text-center " style="height: 50px;width: 50px;">

                                </div>
                            </div>
                            <h5 class="card-title fw-bold color-primary text-center mt-3">Card title</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and
                                make
                                up
                                the bulk of
                                the card's
                                content.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="card shadow-sm border-0 mb-5" style="border-radius: 20px">
                <div class="card-body">
                    <h2 class="text-center mt-5 fw-bold color-primary mb-5"><span style="border-radius: 8px"
                            class="bg-primary color-secondary px-2 py-1 ">Help</span> Centre</h2>

                    <div class="d-flex justify-content-between flex-wrap align-items-start">
                        <div class="col-5 text-center">
                            <img class="img-fluid w-75" src="{{ asset('image/faq.png') }}" alt="">
                        </div>
                        <div class="col-7">
                            <div class="card px-1  py-1"style="background-color: #F3F3F3;border-radius: 12px">
                                <div class="d-flex  flex-wrap align-items-center">

                                    <div class=" text-start ps-2">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <div class="col">
                                        <input placeholder="Search for solution" type="text"
                                            style="background-color: #F3F3F3" class="form-control border-0">
                                    </div>
                                </div>
                            </div>
                            <div class="div mt-2">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item border border-2" style="border-radius: 12px">
                                        <h2 class="accordion-header">
                                            <button style="border-radius: 12px" class="accordion-button collapsed"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which
                                                is intended to demonstrate the <code>.accordion-flush</code> class. This
                                                is the first item's accordion body.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5">
            <h2 class="text-center  fw-bold color-primary mb-5">Contact <span style="border-radius: 8px"
                    class="bg-primary color-secondary px-2 py-1 ">Us</span></h2>

            <div class="d-flex justify-content-between">
                <div class="col-6  justify-content-start d-flex flex-wrap">
                    <div class="col-6 pe-3">

                        <div class="card shadow-sm border-0 borad-15">
                            <div class="card-body d-flex justify-content-start">
                                <div style="height: 50px;width: 50px;"
                                    class="card bg-secondary d-flex justify-content-center align-items-center">
                                    <i class="fa-brands fa-xl fa-instagram text-white"></i>
                                </div>
                                <div class="d-flex align-items-start flex-column">

                                    <h5 class="fw-bold ms-2 mb-0">Instagram</h5>
                                    <h6 class="ms-2 mb-0">@lorem</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6 ps-3">
                    <div class="card shadow-sm border-0 borad-15">
                        <div class="card-body">
                            <h4 class="text-center fw-bold my-3">Send a Message</h4>
                            <div class="d-flex flex-column gap-3 px-3">
                                <input type="text" class="form-control" placeholder="Name">
                                <input type="email" class="form-control" placeholder="Email">
                                <textarea placeholder="Message" class="form-control" name="" id="" cols="2" rows="2"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">

                                <button class="btn btn-secondary mt-3">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maps mt-5">
                <iframe class="borad-15" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21041.83286957594!2d110.36639850462139!3d-7.782987181025065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a591a4d553bd5%3A0xc0f964003add568b!2sTugu%20Jogja!5e1!3m2!1sid!2sid!4v1727860992036!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <div class="mt-5 mb-5">
        <br class="mb-5">
    </div>
    <x-script />
</body>

</html>
