import './bootstrap';
import './api';
$(function() {
    const urlSearchParams = new URLSearchParams(window.location.search);
    if (urlSearchParams.has('showSoftDeleted') && urlSearchParams.get('showSoftDeleted') === '1') {
        $('#bulk_delete_btn').hide();
        $('#export_excel_btn').hide();
    }
})
