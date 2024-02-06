$('#dab').click(function () {                 //это функция по клику заполненые поля присваивает переменные
    var $DAT = $('#DAT').val();
    var $DENNID = $('#DENNID').val();
    var $SROKOBUCH = $('#SROKOBUCH').val();
    var $FIOPREP = $('#FIOPREP').val();
    var $VREMYA = $('#VREMYA').val();
    var $KURS = $('#KURS').val();
    var $FORMOBUCH = $('#FORMOBUCH').val();
    var $ORGANIZA = $('#ORGANIZA').val();
    var $NOMERVH = $('#NOMERVH').val();
    var $KOLVOSLUCH = $('#KOLVOSLUCH').val();
    var $KABINET = $('#KABINET').val();



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({ // это отправляет даные в базу через валидацию в контрелере

        type: 'get',

        url: '/otprav/add',

        data: {
            DAT: $DAT,
            DENNID: $DENNID,
            SROKOBUCH: $SROKOBUCH,
            FIOPREP: $FIOPREP,
            VREMYA: $VREMYA,
            KURS: $KURS,
            FORMOBUCH: $FORMOBUCH,
            ORGANIZA: $ORGANIZA,
            NOMERVH: $NOMERVH,
            KOLVOSLUCH: $KOLVOSLUCH,
            KABINET: $KABINET

        },

        success: function (data) {
            if(data == true){
                alert("Заявка отправлена");}
            else
                alert("Заявка не отправлена заполните все поля правильно");
        }
    });
});
