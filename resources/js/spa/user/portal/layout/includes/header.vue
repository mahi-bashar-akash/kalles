<template>

    <header class="w-100 bg-white header small">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <router-link :to="{name: 'home'}" class="navbar-brand fw-bold">
                    Logo
                </router-link>
                <button class="navbar-toggler shadow-sm border-0" type="button" data-bs-toggle="collapse"
                        @click="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse z-3" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item text-end d-inline-block d-lg-none">
                            <button type="button" class="btn btn-close border-0 p-3 icon-close"
                                    @click="collapse"></button>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'home'}" class="nav-link" @click="collapse">
                                Home
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Resume
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Create mew account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link" @click="collapse">
                                Login
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-1 overflow-hidden rounded-3 border">
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 mb-1" @click="collapse">
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="dropdown-item px-3 py-2 rounded-2 mb-1" @click="collapse">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</template>

<script>

export default {
    data(){
        return {}
    },
    mounted() {
    },
    methods: {

        /* Function to collapse in navbar responsive */
        collapse() {
            if (window.innerWidth < 991) {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                } else {
                    navbarCollapse.classList.add('show');
                }
            }
        },

    }
}

</script>
