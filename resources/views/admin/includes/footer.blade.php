<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © 2022 <a href="#">Noa</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="#"> Spruko </a> All rights reserved
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('/') }}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- SIDE-MENU JS -->
<script src="{{ asset('/') }}admin/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}admin/assets/js/sticky.js"></script>



<!-- APEXCHART JS -->
<script src="{{ asset('/') }}admin/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('/') }}admin/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('/') }}admin/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{ asset('/') }}admin/assets/js/index1.js"></script>
<script src="{{ asset('/') }}admin/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{ asset('/') }}admin/assets/js/reply.js"></script>


<!--Internal Fileuploads js-->
<script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fileuploads/js/file-upload.js"></script>


<!--Internal Fancy uploader js-->
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/plugins/fancyuploder/fancy-uploader.js"></script>

<!-- INTERNAL Summernote Editor js -->
<script src="{{ asset('/') }}admin/assets/plugins/summernote-editor/summernote1.js"></script>
<script src="{{ asset('/') }}admin/assets/js/summernote.js"></script>



<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}admin/assets/switcher/js/switcher.js"></script>
<script>
    const alertBox = document.getElementById('autoCloseAlert');

    if (alertBox) {
        // auto close after 10 seconds
        setTimeout(() => {
            alertBox.classList.remove('show');
            alertBox.classList.add('fade');

            setTimeout(() => {
                alertBox.remove();
            }, 500);

        }, 10000);
    }

    function closeAlert() {
        if (alertBox) {
            alertBox.remove();
        }
    }
</script>
<script>
    function previewImage(event) {
        const image = document.getElementById('imagePreview');
        const file = event.target.files[0];

        if (file) {
            image.src = URL.createObjectURL(file);
            image.style.display = 'block';
        }
    }
</script>

<script>
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    axios.defaults.headers.common['X-CSRF-TOKEN'] =
        document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>
<script>
    function toggleCategoryStatus(categoryId, checkbox) {
        axios.post(`/admin/categories/${categoryId}/toggle-status`)
            .then(response => {
                // success, silent
                // response.data.status updated
            })
            .catch(error => {
                // rollback UI if error
                checkbox.checked = !checkbox.checked;
            });
    }
</script>






</body>


</html>
