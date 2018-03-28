<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>陽信銀行外部資料查詢引擎</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    @yield('content')
    
    <div id='app'></div>
    <script src="/js/app.js"></script>
    <script src="/js/pikaday.js"></script>
    <script>

    function form_check() {
        var x = document.forms["input-form"]["keyword"].value;
        if (x == "") {
            alert("請輸入關鍵字。");
            return false;
        }
    }

    function form_fb_check() {
        var x = document.forms["fb-form"]["fb-id"].value;
        if (x == "") {
            alert("請輸入 Facebook 粉絲專頁 ID。");
            return false;
        }
    }

    function source_submit(){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   
        });
        var source_value = document.getElementById("source-select").value;
        
        if (source_value != '') {
            document.forms["source-form"].submit();
        }
    }

    
    function insertHistory(title, url, source){
        console.log(title);
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   
        });

        $.ajax({
            type: 'post',
            url: './insertHistory',
            data: {title:title, url:url, source:source},
            success: function(data){
                console.log("success");
            }
        }); 
    }
    </script>   
    <script>
    // ------ Date -------

    var picker = new Pikaday({
        field: document.getElementById('start-datepicker'),
        firstDay: 1,
        minDate: new Date(1995, 12, 31),
        maxDate: new Date(),
        yearRange: [2000,2020],
        toString(date, format) {
            // you should do formatting based on the passed format,
            // but we will just return 'D/M/YYYY' for simplicity
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
            return `${year}/${month}/${day}`;
        },
        parse(dateString, format) {
            // dateString is the result of `toString` method
            const parts = dateString.split('/');
            const day = parseInt(parts[0], 10);
            const month = parseInt(parts[1] - 1, 10);
            const year = parseInt(parts[1], 10);
            data.start_date = new Date(year, month, day);
            return new Date(year, month, day);
        }
    });

    var picker = new Pikaday({
        field: document.getElementById('end-datepicker'),
        firstDay: 1,
        minDate: new Date(1995, 12, 31),
        maxDate: new Date(),
        yearRange: [2000,2020],
        toString(date, format) {
            // you should do formatting based on the passed format,
            // but we will just return 'D/M/YYYY' for simplicity
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
            return `${year}/${month}/${day}`;
        },
        parse(dateString, format) {
            // dateString is the result of `toString` method
            const parts = dateString.split('/');
            const day = parseInt(parts[0], 10);
            const month = parseInt(parts[1] - 1, 10);
            const year = parseInt(parts[1], 10);
            data.end_date = new Date(year, month, day);
            return new Date(year, month, day);
        }
    });
    </script>
</body>
</html>