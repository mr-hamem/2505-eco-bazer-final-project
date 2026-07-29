/* ==========================================================
   FilePond Init — Product Featured Image + Gallery Images
   ========================================================== */
document.addEventListener('DOMContentLoaded', function () {

    // Only run if FilePond and the relevant inputs exist on this page
    if (typeof FilePond === 'undefined') return;

    const featuredInput = document.querySelector('.filepond-featured');
    const galleryInput = document.querySelector('.filepond-gallery');

    if (!featuredInput && !galleryInput) return;

    if (typeof FilePondPluginImagePreview !== 'undefined' && typeof FilePondPluginFileValidateType !== 'undefined') {
        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);
    }

    if (featuredInput) {
        FilePond.create(featuredInput, {
            allowMultiple: false,
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],
            labelIdle: (featuredInput.dataset.label || 'Featured Image') +
                ' টেনে আনো অথবা <span class="filepond--label-action">ব্রাউজ করো</span>'
        });
    }

    if (galleryInput) {
        FilePond.create(galleryInput, {
            allowMultiple: true,
            storeAsFile: true,
            maxFiles: parseInt(galleryInput.dataset.maxFiles) || 6,
            acceptedFileTypes: ['image/*'],
            labelIdle: (galleryInput.dataset.label || 'Gallery Images') +
                ' টেনে আনো অথবা <span class="filepond--label-action">ব্রাউজ করো</span>'
        });
    }
});