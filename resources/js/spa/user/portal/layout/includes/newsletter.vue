<template>

    <div class="modal fade" id="openNewsLetterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content no-repeat px-2 px-0 rounded-0 border-0" :style="{ background: 'url(' + NewsLetterImageUrl + ')' }">
                <div class="modal-header d-flex justify-content-end border-bottom-0">
                    <button type="button" class="btn-close shadow-none" @click="closeNewsLetter"></button>
                </div>
                <form autocomplete="off" class="modal-body py-5">
                    <div class="fs-5 text-center text-white fw-bold mb-3">
                        Wait! before you leave...
                    </div>
                    <div class="text-center mb-3 text-white">
                        Get 15% off for your first order
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <div class="col-11 col-md-9 mb-3">
                            <input type="text" name="newsletter-content" class="form-control shadow-none rounded-pill text-center small" value="0923u028o3jiweo" placeholder="Copy ode" autocomplete="new-news-letter" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-11 col-md-9 text-center text-white">
                                Use above code to get 15% 0FF for your first order when checkout
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    data(){
        return {
            NewsLetterImageUrl: '/newsletter/newsletter.webp',
        }
    },
    mounted() {

        setTimeout(() => {
            this.openNewsLetter()
        }, 7000);

    },
    methods: {

        /* Function to open newsLetter */
        openNewsLetter() {
            const myModal = new bootstrap.Modal("#openNewsLetterModal", { keyboard: false } );
            myModal.show();
        },

        /* Function to close newsletter */
        closeNewsLetter() {
            let myModalEl = document.getElementById('openNewsLetterModal');
            let modal = bootstrap.Modal.getInstance(myModalEl)
            modal.hide();
        },

    }
}

</script>
