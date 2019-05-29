
   // $('select[name="varient"]').on('change', function() {
    function cardets1(varID){
       
       
        if(varID) {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/listdets',
                data:{ 'varID':varID },
                type: "POST",
                dataType: "json",

                success:function(data) {
                  
                    $.each(data, function(key, value) {
                        $('#img1').append("<img src='storage/"+data[0].image+"' style='width:300px;height:200px;position: absolute;'></img>");
                        // $('#tb1').append("<br/><tr><th>Car Type</th><td>" + data[0].cartype + "</td></tr><br/><tr><th>Engine Type</th><td>"+data[0].entype+"</td></tr><br/><tr><th>Engine Description</th><td>"+ data[0].endes +"</td></tr><tr><td>"+ data[0].cc +"</td></tr><tr><td>"+ data[0].power +"</td></tr><tr><td>"+ data[0].torque +"</td></tr><br/><tr><th>Turning Radius</th><td>"+ data[0].tradius +"</td></tr>");
                        
                        document.getElementById('cartypec1').value=data[0].cartype;
                        document.getElementById('ccc1').value=data[0].cc;
                        document.getElementById('powerc1').value=data[0].power;
                        document.getElementById('price1').value=data[0].price;
                        document.getElementById('milagec1').value=data[0].milage;
                        document.getElementById('transc1').value=data[0].trans;

                        
                        document.getElementById('cc1').value=data[0].cc;
                        document.getElementById('endes1').value=data[0].endes;
                        document.getElementById('power1').value=data[0].power;
                        document.getElementById('torque1').value=data[0].torque;
                        document.getElementById('cylinder1').value=data[0].cylinder;
                        document.getElementById('valves1').value=data[0].valves;
                        document.getElementById('dtype1').value=data[0].dtype;
                        document.getElementById('fsupply1').value=data[0].fsupply;
                        document.getElementById('trans1').value=data[0].trans;
                        document.getElementById('gear1').value=data[0].gear;
                        document.getElementById('clutch1').value=data[0].clutch;

                        document.getElementById('speed1').value=data[0].speed;
                        document.getElementById('acce1').value=data[0].acce;
                        document.getElementById('braking1').value=data[0].braking;
                        document.getElementById('milage1').value=data[0].milage;
                        document.getElementById('fuel1').value=data[0].fuel;
                        document.getElementById('tcapacity1').value=data[0].tcapacity;

                        document.getElementById('fsus1').value=data[0].fsus;
                        document.getElementById('rsus1').value=data[0].rsus;
                        document.getElementById('shock1').value=data[0].shock;
                        document.getElementById('steert1').value=data[0].steert;
                        document.getElementById('steerc1').value=data[0].steerc;
                        document.getElementById('tradius1').value=data[0].tradius;

                        document.getElementById('length1').value=data[0].length;
                        document.getElementById('width1').value=data[0].width;
                        document.getElementById('height1').value=data[0].height;
                        document.getElementById('wbase1').value=data[0].wbase;
                        document.getElementById('ground1').value=data[0].ground;
                        document.getElementById('kweight1').value=data[0].kweight;
                        document.getElementById('cvolume1').value=data[0].cvolume;
                        document.getElementById('trtype1').value=data[0].trtype;
                        document.getElementById('tsize1').value=data[0].tsize;
                        document.getElementById('seat1').value=data[0].seat;
                        document.getElementById('door1').value=data[0].door;

                        document.getElementById('powerst1').value=data[0].powerst;
                        document.getElementById('powf1').value=data[0].powf;
                        document.getElementById('powr1').value=data[0].powr;
                        document.getElementById('acctrl1').value=data[0].acctrl;
                        document.getElementById('rto1').value=data[0].rto;
                        document.getElementById('tlight1').value=data[0].tlight;
                        document.getElementById('rar1').value=data[0].rar;
                        document.getElementById('fch1').value=data[0].fch;
                        document.getElementById('rac1').value=data[0].rac;
                        document.getElementById('rshr1').value=data[0].rshr;
                        document.getElementById('rps1').value=data[0].rps;
                        document.getElementById('msteer1').value=data[0].msteer;
                        document.getElementById('navigation1').value=data[0].navigation;
                        document.getElementById('aqc1').value=data[0].aqc;
                        document.getElementById('rflo1').value=data[0].rflo;
                        document.getElementById('cruise1').value=data[0].cruise;
                        document.getElementById('ssbtn1').value=data[0].ssbtn;
                        document.getElementById('gsi1').value=data[0].gsi;

                        document.getElementById('ac1').value=data[0].ac;
                        document.getElementById('heater1').value=data[0].heater;
                        document.getElementById('tmeter1').value=data[0].tmeter;
                        document.getElementById('clock1').value=data[0].clock;
                        document.getElementById('easeat1').value=data[0].easeat;
                        document.getElementById('dtd1').value=data[0].dtd;
                        document.getElementById('tameter1').value=data[0].tameter;
                        document.getElementById('lseat1').value=data[0].lseat;
                        document.getElementById('odo1').value=data[0].odo;
                        document.getElementById('lswheel1').value=data[0].lswheel;
                       
                        document.getElementById('ahlamp1').value=data[0].ahlamp;
                        document.getElementById('ffog1').value=data[0].ffog;
                        document.getElementById('rfog1').value=data[0].rfog;
                        document.getElementById('rww1').value=data[0].rww;
                        document.getElementById('awheel1').value=data[0].awheel;
                        document.getElementById('sroof1').value=data[0].sroof;
                        document.getElementById('rrail1').value=data[0].rrail;
                        document.getElementById('orvm1').value=data[0].orvm;
                        document.getElementById('rsw1').value=data[0].rsw;
                        document.getElementById('rwash1').value=data[0].rwash;
                        document.getElementById('wcover1').value=data[0].wcover;
                        document.getElementById('spoiler1').value=data[0].spoiler;
                        document.getElementById('carrier1').value=data[0].carrier;
                        document.getElementById('rmi1').value=data[0].rmi;

                        document.getElementById('abs1').value=data[0].abs;
                        document.getElementById('ebd1').value=data[0].ebd;
                        document.getElementById('cenlock1').value=data[0].cenlock;
                        document.getElementById('psense1').value=data[0].psense;
                        document.getElementById('adlock1').value=data[0].adlock;
                        document.getElementById('bassist1').value=data[0].bassist;
                        document.getElementById('cslock1').value=data[0].cslock;
                        document.getElementById('pabag1').value=data[0].pabag;
                        document.getElementById('rsabag1').value=data[0].rsabag;
                        document.getElementById('dabag1').value=data[0].dabag;
                        document.getElementById('fsabag1').value=data[0].fsabag;
                        document.getElementById('dnrvm1').value=data[0].dnrvm;
                        document.getElementById('sbwarn1').value=data[0].sbwarn;
                        document.getElementById('adseat1').value=data[0].adseat;
                        document.getElementById('dawarn1').value=data[0].dawarn;
                        document.getElementById('klentry1').value=data[0].klentry;
                        document.getElementById('scsys1').value=data[0].scsys;
                        document.getElementById('hass1').value=data[0].hass;
                        document.getElementById('rcam1').value=data[0].rcam;
                        document.getElementById('atdev1').value=data[0].atdev;
                        document.getElementById('adu1').value=data[0].adu;
                        document.getElementById('pdl1').value=data[0].pdl;
                        document.getElementById('alarm1').value=data[0].alarm;
                        document.getElementById('tctrl1').value=data[0].tctrl;
                        document.getElementById('ei1').value=data[0].ei;
                        document.getElementById('ecwarn1').value=data[0].ecwarn;
                        document.getElementById('fhlamp1').value=data[0].fhlamp;

                        document.getElementById('cd1').value=data[0].cd;
                        document.getElementById('radio1').value=data[0].radio;
                        document.getElementById('speaker1').value=data[0].speaker;
                        document.getElementById('usb1').value=data[0].usb;
                        document.getElementById('bt1').value=data[0].bt;
                        document.getElementById('rspeaker1').value=data[0].rspeaker;
                        
                        
                  });
                }
            });
        }else{
            $('select[#tb]').empty();
        }
    }
