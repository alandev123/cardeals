$(document).ready(function() {
    $('select[name="companyname"]').on('change', function() {
        var modelID = $(this).val();
       
        if(modelID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/listmodel',
                data:{ modelID ,modelID },
                type: "POST",
                dataType: "json",

                success:function(data) {

                    $('select[name="modelname"]').html('<option disabled="disabled" selected="selected">Select</option>');
                    $.each(data, function(key, value) {
                         $('#modelname').append('<option value="'+ value.car_id +'">'+ value.carname +'</option>');
                       
                    });
                }
            });
        }else{
            $('select[name="modelname"]').empty();
        }
    });
});
function modeldet(modId)
{
         
        if(modID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/listmods',
                data:{ 'modID':modID },
                type: "POST",
                dataType: "json",

                success:function(data) {
                    $('select[name="varient"]').html('<option disabled="disabled" selected="selected">Select</option>');
                    $.each(data, function(key, value) {
                        $('#varient').append('<option value="'+ value.varient_id +'">'+ value.varient +'</option>');
                       
                    });
                }
            });
        }
}

