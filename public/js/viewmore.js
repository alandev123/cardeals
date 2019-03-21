function viewmore(email){
         var email= email;
           $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/ajaxview',
                type: "GET",
                dataType: 'json',
                data:{
                    datas:email
                },
                success:function(data) {
                    for(i=0;i<data.length;i++){

                        $('#trid').append("<td>" + data[i].name + "</td><td>"+data[i].state+"</td><td>"+ data[i].district +"</td><td>"+ data[i].city +"</td><td>"+ data[i].email +"</td><td>"+ data[i].phone +"</td><td>"+ data[i].status +"</td>");

                     }
                }
            });

 };