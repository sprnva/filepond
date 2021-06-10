<?php
if (file_exists(public_url('/assets/filepond/'))) {
?>
    <link rel="stylesheet" href="<?= public_url('/assets/filepond/css/filepond-plugin-image-preview.min.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/filepond/css/filepond-plugin-image-edit.css') ?>">
    <link rel="stylesheet" href="<?= public_url('/assets/filepond/css/filepond.css') ?>">

    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-file-encode.min.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-file-validate-size.min.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-file-validate-type.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-exif-orientation.min.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-preview.min.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-resize.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-crop.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-edit.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond-plugin-image-transform.js') ?>"></script>
    <script src="<?= public_url('/assets/filepond/js/filepond.js') ?>"></script>
<?php
}
?>