$(document).ready(function() {
    $('select[name="modelname1"]').on('change', function() {
        var carID = $(this).val();
       
        if(carID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/listvarient',
                data:{ carID ,carID },
                type: "POST",
                dataType: "json",

                success:function(data) {
                    $('select[name="varient1"]').empty();
                    $.each(data, function(key, value) {
                         $('#varient1').append(' <option disabled="disabled" selected="selected">Select</option>','<option value="'+ value.varient_id +'">'+ value.varient +'</option>');
                       
                    });
                }
            });
        }else{
            $('select[name="varient1"]').empty();
        }
    });
});