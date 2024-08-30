<template>

    <section class="w-100 bg-light small">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center w-100 p-2">
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary me-2 border-0 p-1">
                            <i class="bi bi-telephone-fill me-1"></i>
                            +01 23456789
                        </a>
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary border-0 p-1">
                            <i class="bi bi-envelope-fill me-1"></i>
                            Kalles@domain.com
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="d-flex justify-content-center justify-content-md-end justify-content-xl-center align-items-center w-100 p-2">
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary border-0 p-1">
                            Summer sale discount off 50%! Shop Now
                        </a>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="d-flex justify-content-center justify-content-md-end align-items-center w-100 p-2">
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary border-0 p-1 me-2">
                            <i class="bi bi-geo-alt-fill me-1"></i> Location
                        </a>
                        <div class="dropdown me-2">
                            <button type="button" class="btn border-0 p-1 rounded-0" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="text-secondary small">
                                    <i class="bi bi-translate me-1"></i> English
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end p-2 rounded-2 border-0 shadow">
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 secondary small">
                                        <span class="text-secondary">
                                            English
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 secondary small">
                                        <span class="text-secondary">
                                            Arabic
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn border-0 p-1 rounded-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-secondary small d-flex align-items-center">
                                <img :src="`/currency/currency-1.svg`" class="width-15 me-1" alt="currency-1"> United States USD
                            </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end p-2 rounded-2 border-0 shadow">
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-2.svg`" class="width-15 me-2" alt="currency-2"> Canada
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-3.svg`" class="width-15 me-2" alt="currency-3"> France
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-4.svg`" class="width-15 me-2" alt="currency-2"> Germany
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-5.svg`" class="width-15 me-2" alt="currency-5"> Japan
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-6.svg`" class="width-15 me-2" alt="currency-6"> New Zealand
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-7.svg`" class="width-15 me-2" alt="currency-7"> United Kingdom
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-1.svg`" class="width-15 me-2" alt="currency-8"> United States
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 small secondary">
                                        <span class="d-flex justify-content-start align-items-center">
                                            <img :src="`/currency/currency-8.svg`" class="width-15 me-2" alt="currency-0"> Vietnam
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>

export default {
    data(){
        return {}
    },
    mounted() {
    },
    methods: {
    }
}

</script>
