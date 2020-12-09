<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // jQuery(document).ready(function() {
    // 	jQuery('#votercard').DataTable();
    // });
    var ageProofDocument = ""
    jQuery(document).ready(function() {
        jQuery.ajax({
            url: 'http://localhost/Pay%20India%20Website/Admin/Admin2_backend/votercard_all.php',
            method: 'get',
            dataType: 'json',
            success: function(data) {
                jQuery("#datatable").dataTable({
                    data: data,
                    columns: [{
                            'data': 'id'
                        },
                        {
                            'data': 'name'
                        },
                        {
                            'data': 'dob'
                        },
                        {
                            'data': 'mobile'
                        },
                        {
                            'data': 'relative_name'
                        },
                        {
                            'data': 'relative_type'
                        },
                        {
                            'data': 'street'
                        },
                        {
                            'data': 'village'
                        },
                        {
                            'data': 'postoffice'
                        },
                        {
                            'data': 'pincode'
                        },
                        {
                            'data': 'state'
                        },
                        {
                            'data': 'district'
                        },
                        {
                            'data': 'ageproof_option'
                        },
                        {
                            'data': 'addressproof_option'
                        },
                        {
                            'data': 'gender'
                        },
                        {
                            'data': 'ageproofdocument'
                        },
                        {
                            'data': 'addressproofdocument'
                        },
                        {
                            'data': 'otherdocument'
                        },
                        {
                            'data': 'comments'
                        }
                    ]
                });
            }
        })
    });
</script>