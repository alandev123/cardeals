
   // $('select[name="varient"]').on('change', function() {
        function cardets(varID){
       
       
        if(varID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/listdets',
                data:{ 'varID':varID },
                type: "POST",
                dataType: "json",

                success:function(data) {
                  
                    $.each(data, function(key, value) {
                        $('#img').append("<img src='storage/"+data[0].image+"' style='width:300px;height:200px;position: absolute;'></img>");
                        // $('#tb1').append("<br/><tr><th>Car Type</th><td>" + data[0].cartype + "</td></tr><br/><tr><th>Engine Type</th><td>"+data[0].entype+"</td></tr><br/><tr><th>Engine Description</th><td>"+ data[0].endes +"</td></tr><tr><td>"+ data[0].cc +"</td></tr><tr><td>"+ data[0].power +"</td></tr><tr><td>"+ data[0].torque +"</td></tr><br/><tr><th>Turning Radius</th><td>"+ data[0].tradius +"</td></tr>");
                        
                        document.getElementById('cartypec').value=data[0].cartype;
                        document.getElementById('ccc').value=data[0].cc;
                        document.getElementById('powerc').value=data[0].power;
                        document.getElementById('price').value=data[0].price;
                        
                        document.getElementById('milagec').value=data[0].milage;
                        document.getElementById('transc').value=data[0].trans;

                        
                        document.getElementById('cc').value=data[0].cc;
                        document.getElementById('endes').value=data[0].endes;
                        document.getElementById('power').value=data[0].power;
                        document.getElementById('torque').value=data[0].torque;
                        document.getElementById('cylinder').value=data[0].cylinder;
                        document.getElementById('valves').value=data[0].valves;
                        document.getElementById('dtype').value=data[0].dtype;
                        document.getElementById('fsupply').value=data[0].fsupply;
                        document.getElementById('trans').value=data[0].trans;
                        document.getElementById('gear').value=data[0].gear;
                        document.getElementById('clutch').value=data[0].clutch;

                        document.getElementById('speed').value=data[0].speed;
                        document.getElementById('acce').value=data[0].acce;
                        document.getElementById('braking').value=data[0].braking;
                        document.getElementById('milage').value=data[0].milage;
                        document.getElementById('fuel').value=data[0].fuel;
                        document.getElementById('tcapacity').value=data[0].tcapacity;

                        document.getElementById('fsus').value=data[0].fsus;
                        document.getElementById('rsus').value=data[0].rsus;
                        document.getElementById('shock').value=data[0].shock;
                        document.getElementById('steert').value=data[0].steert;
                        document.getElementById('steerc').value=data[0].steerc;
                        document.getElementById('tradius').value=data[0].tradius;

                        document.getElementById('length').value=data[0].length;
                        document.getElementById('width').value=data[0].width;
                        document.getElementById('height').value=data[0].height;
                        document.getElementById('wbase').value=data[0].wbase;
                        document.getElementById('ground').value=data[0].ground;
                        document.getElementById('kweight').value=data[0].kweight;
                        document.getElementById('cvolume').value=data[0].cvolume;
                        document.getElementById('trtype').value=data[0].trtype;
                        document.getElementById('tsize').value=data[0].tsize;
                        document.getElementById('seat').value=data[0].seat;
                        document.getElementById('door').value=data[0].door;

                        document.getElementById('powerst').value=data[0].powerst;
                        document.getElementById('powf').value=data[0].powf;
                        document.getElementById('powr').value=data[0].powr;
                        document.getElementById('acctrl').value=data[0].acctrl;
                        document.getElementById('rto').value=data[0].rto;
                        document.getElementById('tlight').value=data[0].tlight;
                        document.getElementById('rar').value=data[0].rar;
                        document.getElementById('fch').value=data[0].fch;
                        document.getElementById('rac').value=data[0].rac;
                        document.getElementById('rshr').value=data[0].rshr;
                        document.getElementById('rps').value=data[0].rps;
                        document.getElementById('msteer').value=data[0].msteer;
                        document.getElementById('navigation').value=data[0].navigation;
                        document.getElementById('aqc').value=data[0].aqc;
                        document.getElementById('rflo').value=data[0].rflo;
                        document.getElementById('cruise').value=data[0].cruise;
                        document.getElementById('ssbtn').value=data[0].ssbtn;
                        document.getElementById('gsi').value=data[0].gsi;

                        document.getElementById('ac').value=data[0].ac;
                        document.getElementById('heater').value=data[0].heater;
                        document.getElementById('tmeter').value=data[0].tmeter;
                        document.getElementById('clock').value=data[0].clock;
                        document.getElementById('easeat').value=data[0].easeat;
                        document.getElementById('dtd').value=data[0].dtd;
                        document.getElementById('tameter').value=data[0].tameter;
                        document.getElementById('lseat').value=data[0].lseat;
                        document.getElementById('odo').value=data[0].odo;
                        document.getElementById('lswheel').value=data[0].lswheel;

                        document.getElementById('ahlamp').value=data[0].ahlamp;
                        document.getElementById('ffog').value=data[0].ffog;
                        document.getElementById('rfog').value=data[0].rfog;
                        document.getElementById('rww').value=data[0].rww;
                        document.getElementById('awheel').value=data[0].awheel;
                        document.getElementById('sroof').value=data[0].sroof;
                        document.getElementById('rrail').value=data[0].rrail;
                        document.getElementById('orvm').value=data[0].orvm;
                        document.getElementById('rsw').value=data[0].rsw;
                        document.getElementById('rwash').value=data[0].rwash;
                        document.getElementById('wcover').value=data[0].wcover;
                        document.getElementById('spoiler').value=data[0].spoiler;
                        document.getElementById('carrier').value=data[0].carrier;
                        document.getElementById('rmi').value=data[0].rmi;

                        document.getElementById('abs').value=data[0].abs;
                        document.getElementById('ebd').value=data[0].ebd;
                        document.getElementById('cenlock').value=data[0].cenlock;
                        document.getElementById('psense').value=data[0].psense;
                        document.getElementById('adlock').value=data[0].adlock;
                        document.getElementById('bassist').value=data[0].bassist;
                        document.getElementById('cslock').value=data[0].cslock;
                        document.getElementById('pabag').value=data[0].pabag;
                        document.getElementById('rsabag').value=data[0].rsabag;
                        document.getElementById('dabag').value=data[0].dabag;
                        document.getElementById('fsabag').value=data[0].fsabag;
                        document.getElementById('dnrvm').value=data[0].dnrvm;
                        document.getElementById('sbwarn').value=data[0].sbwarn;
                        document.getElementById('adseat').value=data[0].adseat;
                        document.getElementById('dawarn').value=data[0].dawarn;
                        document.getElementById('klentry').value=data[0].klentry;
                        document.getElementById('scsys').value=data[0].scsys;
                        document.getElementById('hass').value=data[0].hass;
                        document.getElementById('rcam').value=data[0].rcam;
                        document.getElementById('atdev').value=data[0].atdev;
                        document.getElementById('adu').value=data[0].adu;
                        document.getElementById('pdl').value=data[0].pdl;
                        document.getElementById('alarm').value=data[0].alarm;
                        document.getElementById('tctrl').value=data[0].tctrl;
                        document.getElementById('ei').value=data[0].ei;
                        document.getElementById('ecwarn').value=data[0].ecwarn;
                        document.getElementById('fhlamp').value=data[0].fhlamp;

                        document.getElementById('cd').value=data[0].cd;
                        document.getElementById('radio').value=data[0].radio;
                        document.getElementById('speaker').value=data[0].speaker;
                        document.getElementById('usb').value=data[0].usb;
                        document.getElementById('bt').value=data[0].bt;
                        document.getElementById('rspeaker').value=data[0].rspeaker;

                       
                        
                        
                  });
                }
            });
        }else{
            $('select[#tb1]').empty();
        }
    }
