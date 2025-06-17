<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('adminTheme/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('adminTheme/assets/js/main.js') }}"></script>
<script src="{{ asset('adminTheme/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/js/dataTables.min.js') }}"></script>
<script src="{{ asset('adminTheme/assets/js/bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminTheme/pageLevel/js/delete.js') }}"></script>
<script src="{{ asset('adminTheme/pageLevel/js/notification.js') }}"></script>
<script src="{{ asset('adminTheme/pageLevel/js/button.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>

<script>
    // Apply Tagify to the input
    var input = document.getElementById('tagsInput');
    new Tagify(input);
</script>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('description_hindi');
    CKEDITOR.replace('description_gujrati');
</script>

<script src="https://malsup.github.io/jquery.form.js"></script>