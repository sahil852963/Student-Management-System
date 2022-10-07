<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn').click(function(){
                var num = jQuery('#num').val();
                jQuery.ajax({
                    url:'{{ route('ajax') }}',
                    type:'get',
                    data:'num='+num,
                    success: function(data){
                       alert(data);
                    }
                });
            });
            // $('#btn').click(function(){
                // $(document).ajaxSend(function(event, xhr,option){
                //     alert("the resd ");
                // })
                // $('#res').load("{{ route('ajax') }}");
                // });
            // });
            
            // $('p').click(function(){
            //     alert('<p> is clicked');
            // });


                                // mouse events
                //  $('p').mouseenter(function(){
                //         $('p').css("background-color","yellow");
                //     });
                //  $('p').mouseleave(function(){
                //      $('p').css("background-color","green");
                //  });
                // $('p').hover(function(){
                //     $('p').css("background-color","red");
                // }, function(){
                //     $('p').css("background-color","yellow");
                // });
                // $('p').mousedown(function(){
                //     $('p').css('background-color','orange');
                // });
                // $('p').mouseup(function(){
                //     $('p').css('background-color','black');
                // });
                // $('p').mouseover(function(){
                //     $('p').css('background-color','orange');
                // });
                // $('p').mouseout(function(){
                //     $('p').css('background-color','cyan');
                // });



                            // Keyboardevents   

            // $('input').keydown(function(){
            //     $('input').css('background-color','red');
            // });
            // $('input').keyup(function(){
            //     $('input').css('background-color','green');
            // });
            // var i = 0;
            // $('input').keypress(function(){
            //     $('span').text(i = i+1);
            // });
            // var i= 0;
            // $('input').keyup(function(){
            //     $('span').text(20 - $('input').val().length);
            // });

            // $('input').blur(function(){
            //     $('span').text($('input').val());
            // });
            // $('input').focus(function(){
            //     $(this).css('border', '5px solid red');
            // });
            // $('input').blur(function(){
            //     $(this).css('border', '1px solid #adadad');
            // });
            // $('#btn').click(function(){
            //     var str = $('form').serialize();
            //     alert(str);
            // })

            // $('#btn').click(function(){
                // var str = $('form').serializeArray();
                // alert(str);
                // $.each(str, function(i, val){
                //     alert(val.name+" : "+val.value)
                // })
            // })
            // $('h1').css('background-color',"yellow");
            // $("#hide").click(function(){
            //     $("h1").hide(2000);
            // });
            // $("#show").click(function(){
            //     $('h1').show();
            // });
            // $('#togglep').click(function(){
            //     $('p').toggle();
            // })
            // $("#show1").click(function(){
            //     $('#div1').fadeIn();
            //     $('#div2').fadeIn('slow');
            //     $('#div3').fadeIn(2000);
            // });
            // $('#show2').click(function(){
            //     $('#div1').fadeOut();
            //     $('#div2').fadeOut();
            //     $('#div3').fadeOut();
            // })
            // $('#toggle').click(function(){
            //     $('#div1').fadeToggle();
            //     $('#div2').fadeToggle();
            //     $('#div3').fadeToggle();
            // })
            // $('#fadeto').click(function(){
            //     $('#div1').fadeTo("slow",0.3);
            //     $('#div2').fadeTo("slow",0.4);
            //     $('#div3').fadeTo("slow",0.5);
            // })
            // $('#panel1').click(function(){
            //     $('#panel2').slideDown();
            // });
            // $('#panel1').click(function(){
            //     $('#panel2').slideUp();
            // });
            // $('#panel1').click(function(){
            //     $('#panel2').slideToggle();
            // });
            // $('#animate').click(function(){
            //     $('#rect').animate({
            //         left:'500px',
            //         height:'150px',
            //         width:'150px',
            //         opacity:'0.5'
            //     },1000);
            // })
        });
    </script>
    <style type="text/css">
    /* p{ */
        /* text-align:center; */
        /* background-color:green; */
    /* } */
    /* i1 */
        /* p{
            display:none;
        } */
        /* body{
            text-align:center;
        }
        #div1{
            margin:0 auto;
            width:200px;
            height:100px;
            background-color:red; */
            /* display:none;
        }
        #div2{
            margin:0 auto;
            width:200px;
            height:100px;
            background-color:black;
            /* display:none; */
        /* }
        #div3{
            margin:0 auto;
            width:200px;
            height:100px;
            background-color:yellow; */
            /* display:none; */
        /* }
        #panel1,#panel2{
            padding:5px;
            margin: 0 auto; */
            /* width:400px; */
            /* background-color:cyan;
            text-align:center;
            border:1px solid black
        } */
        /* #panel1{
            cursor:pointer;
        }
        #panel2{
            padding:50px;
            display:none;
        }
        #rect{
            width:100px;
            height:100px;
            background-color:green;
            position:absolute;
        }  */
        /* div{
            background-color:lightcoral;
            padding:50px;
        } */
    </style>
</head>
<body>
    <h1>Ajax Prpgram </h1>
    <input type="text" id="num">
    <button id="btn">ajax btn</button>
    {{-- <p id="res">sahil</p> --}}
    {{-- <div>
        <p>learnvern is best</p>
    </div> --}}
    

    {{-- <form method="get"> --}}
        {{-- Fname : <input type="text" ><br><br> --}}
        {{-- you entered : <span></span> --}}
        
        {{-- Lname : <input type="text" name="lname" value="sharma"><br><br> --}}
        {{-- <button>serializearray</button> --}}
    {{-- </form> --}}

    
    {{-- <h2>this is animate</h2>
    <button id="animate">start</button>
    <div id='rect'></div>
    <div id="panel1">clik tomopen panel 2</div>
    <div id="panel2">this is panel 2</div> --}}
    {{-- <p>this is first tag</p> --}}
    {{-- <button id="toggle">fadetoggle</button>
    <button id="fadeto">fade To</button>
    <button id="show1">Click fade in</button>
    <button id="show2">Click fade out</button>
    <div id="div1">div1</div>
    <div id="div2">div2</div>
    <div id="div3">div3</div>
    <h1>This is heading</h1>
    <p>this is first tag</p>
    <button id="hide">hide</button>
    <button id="show">show</button>
    <button id="togglep">toggle</button> --}}
</body>
</html>