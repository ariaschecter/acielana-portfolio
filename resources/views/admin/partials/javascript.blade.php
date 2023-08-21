<!-- Core Js -->
<script src="{{ asset('backend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('backend/js/rt-plugins.js') }}"></script>
<script src="{{ asset('backend/js/popper.js') }}"></script>
{{-- <script src="{{ asset('backend/js/tw-elements-1.0.0-alpha13.min.js') }}"></script>
<script src="{{ asset('backend/js/SimpleBar.js') }}"></script> --}}
<script src="{{ asset('backend/js/iconify.min.js') }}"></script>
{{-- <script src="{{ asset('backend/js/countrySelect.js') }}"></script>
<script src="{{ asset('backend/js/flatpickr.js') }}"></script>
<script src="{{ asset('backend/js/iconify.js') }}"></script>
<script src="{{ asset('backend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('backend/js/jquery.validate.js') }}"></script>
<script src="{{ asset('backend/js/leaflet.js') }}"></script>
<script src="{{ asset('backend/js/nice-select.min.js') }}"></script>
<script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('backend/js/popper.js') }}"></script>
<script src="{{ asset('backend/js/quill.min.js') }}"></script>
<script src="{{ asset('backend/js/Select2.min.js') }}"></script>
<script src="{{ asset('backend/js/SimpleBar.js') }}"></script>
<script src="{{ asset('backend/js/step-form.js') }}"></script>
<script src="{{ asset('backend/js/step-progress.js') }}"></script>
<script src="{{ asset('backend/js/swiper.min.js') }}"></script>
<script src="{{ asset('backend/js/tippy.js') }}"></script>
<script src="{{ asset('backend/js/tw-elements-1.0.0-alpha13.min.js') }}"></script>
<script src="{{ asset('backend/js/zabuto_calendar.min.js') }}"></script> --}}

<!-- Jquery Plugins -->

<!-- app js -->
<script src="{{ asset('backend/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('backend/js/app.js') }}"></script>
<script>
    var editor_config = {
        path_absolute: "/",
        selector: 'textarea.my-editor',
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback: function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                'body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document
                .getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);
</script>
