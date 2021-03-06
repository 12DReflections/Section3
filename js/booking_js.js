            var sa_price = 0, sa_sin_price = 0, sp_price = 0, sp_sin_price = 0, sc_price = 0, sc_sin_price = 0, fa_price = 0, fa_sin_price = 0;
            var fc_price = 0, fc_sin_price = 0, b1_price = 0, b_sin_price = 0, b2_price = 0, b3_price = 0;
            var total_price = 0;
            var film_name;
            var days;
            var time;
            var mov_type;
            set_sin_price_normal();
            
        /*Set Movie Time */
            function set_time(day, mov_typ) {
                switch (mov_typ) {
                    case "AC":
                        switch (day) {
                            case "Monday":
                            case "Tuesday":	time = "9:00 pm"; set_sin_price_normal(); break;
                            case "Wednesday":
                            case "Thursday":
                            case "Friday":	time = "9:00 pm"; set_sin_price_normal(); break;
                            default:            time = "9:00 pm"; set_sin_price_special();
                        }   break;
                    case "CH":
                        switch (day) {
                            case "Monday":
                            case "Tuesday":	time = "1:00 pm"; set_sin_price_normal(); break;
                            case "Wednesday":
                            case "Thursday":
                            case "Friday":	time = "6:00 pm"; set_sin_price_normal(); break;
                            default:            time = "12:00 pm"; set_sin_price_special();
                        }; break;
                    case "AF":switch (day) {
                            case "Monday":
                            case "Tuesday":	time = "6:00 pm"; set_sin_price_normal(); break;
                            case "Satuday":
                            case "Sunday":      time = "3:00 pm"; set_sin_price_special(); break;
                        }break;

                    case "RC":
                            switch (day) {
                            case "Monday":
                            case "Tuesday":	time = "9:00 pm"; set_sin_price_normal(); break;
                            case "Wednesday":
                            case "Thursday":
                            case "Friday":	time = "1:00 pm";set_sin_price_special(); break;
                        default: time = "6:00 pm"; set_sin_price_special();
                        }

                }
         
                $('#time_val').text(time);
            }
            
        /* Setting prices and Creating Table */
            function set_sin_price_normal() {

                sa_sin_price = 12;
                sp_sin_price = 10;
                sc_sin_price = 8;
                fa_sin_price = 25;
                fc_sin_price = 20;
                b_sin_price = 20;

            }
            function set_sin_price_special() {
                sa_sin_price = 18;
                sp_sin_price = 15;
                sc_sin_price = 12;
                fa_sin_price = 30;
                fc_sin_price = 25;
                b_sin_price = 30;
            }
            function create_table(id) {
                $('#' + id).append("<form id='book_form' method='post'></form>");
                $('#book_form').append("<table id='book_table' class='content_table'></table>");
                $('#book_table').append("<tr id='mov_name_row'></tr>");
                $('#mov_name_row').append("<td id='mov_name'></td><td id='mov_name_val_td' colspan='2'></td>");
                $('#mov_name').append("<p>Film Name</p>");
                $('#mov_name_val_td').append("<p id='mov_name_val' ></p>");
                $('#mov_name_val').text(film_name);
                $('#mov_name_row').after("<tr id='day_row'><td id='day_lb_td'><p>Day</p></td><td id='day_sel_td' colspan='2' class='content_td_sel'><select id='day_sel'></select></td></tr>");
                for (var i = 0; i < days.length; i++) {
                    $('#day_sel').append("<option value='" + days[i] + "'>" + days[i] + "</option>");
                }
                $('#day_row').after("<tr id='mov_time_row'><td id='time_lb_td'><p>Time<p></td><td id='time_val_td' colspan='2'><p id='time_val'></p></td></tr>");
                set_time($('#day_sel').val(), mov_type);
                $('#day_sel').on("change", function () {
                    set_time($('#day_sel').val(), mov_type);
                    set_price('sa');
                    set_price('sp');
                    set_price('sc');
                    set_price('fa');
                    set_price('fc');
                    set_price('b1');
                    set_price('b2');
                    set_price('b3');
                });
            
            /*Price Table*/
                $('#mov_time_row').after("<tr id='price_col_title' class='hoverTable'><td class='content_big_td'>Ticket Type</td><td>Quanity</td><td class='content_sml_td'>Subtotal Priceset</td></tr>");
                var title = "price_col_title";
                $('#book_table').append("<tr id='sa_row'><td id='sa_lab_row'><p>Standard Adult</p></td><td id='sa_qua_td'><select id='sa_qua'></select></td><td id='sa_price_td'><p id='sa_price'></p></td</tr>");
                add_qua_opt('sa');
                set_price('sa');
                add_sel_ent('sa');
                $('#book_table').append("<tr id='sp_row'><td id='sp_lab_row'><p>Standard Concession</p></td><td id='sp_qua_td'><select id='sp_qua'></select></td><td id='sp_price_td'><p id='sp_price'></p></td</tr>");
                add_qua_opt('sp');
                set_price('sp');
                add_sel_ent('sp');
                $('#book_table').append("<tr id='sc_row'><td id='sc_lab_row'><p>Standard Child</p></td><td id='sc_qua_td'><select id='sc_qua'></select></td><td id='sc_price_td'><p id='sc_price'></p></td</tr>");
                add_qua_opt('sc');
                set_price('sc');
                add_sel_ent('sc');
                $('#book_table').append("<tr id='fa_row'><td id='fa_lab_row'><p>First Class Adult</p></td><td id='fa_qua_td'><select id='fa_qua'></select></td><td id='fa_price_td'><p id='fa_price'></p></td</tr>");
                add_qua_opt('fa');
                set_price('fa');
                add_sel_ent('fa');
                $('#book_table').append("<tr id='fc_row'><td id='fc_lab_row'><p>First Class Child</p></td><td id='fc_qua_td'><select id='fc_qua'></select></td><td id='fc_price_td'><p id='fc_price'></p></td</tr>");
                add_qua_opt('fc');
                set_price('fc');
                add_sel_ent('fc');
                $('#book_table').append("<tr id='b1_row'><td id='b1_lab_row'><p>Beanbag - 1</p></td><td id='b1_qua_td'><select id='b1_qua'></select></td><td id='b1_price_td'><p id='b1_price'></p></td</tr>");
                add_qua_opt('b1');
                set_price('b1');
                add_sel_ent('b1');
                $('#book_table').append("<tr id='b2_row'><td id='b2_lab_row'><p>Beanbag - 2</p></td><td id='b2_qua_td'><select id='b2_qua'></select></td><td id='b2_price_td'><p id='b2_price'></p></td</tr>");
                add_qua_opt('b2');
                set_price('b2');
                add_sel_ent('b2');
                $('#book_table').append("<tr id='b3_row'><td id='b3_lab_row'><p>Beanbag - 3</p></td><td id='b3_qua_td'><select id='b3_qua'></select></td><td id='b3_price_td'><p id='b3_price'></p></td</tr>");
                add_qua_opt('b3');
                set_price('b3');
                add_sel_ent('b3');
                $('#book_table').append("<tr id='total_price_row'><td colspan='2'><p>Total Price</p></td><td id='total_price_td'><p id='total_price'>$ 0.00</p></td></tr>");
                $('#book_form').append("<input id='film' type='hidden' name='film' />");
                $('#book_form').append("<input id='day' type='hidden' name='day' />");
                $('#book_form').append("<input id='time' type='hidden' name='time' />");
                $('#book_form').append("<input id='sa' type='hidden' name='SA' />");
                $('#book_form').append("<input id='sp' type='hidden' name='SP' />");
                $('#book_form').append("<input id='sc' type='hidden' name='SC' />");
                $('#book_form').append("<input id='fa' type='hidden' name='FA' />");
                $('#book_form').append("<input id='fc' type='hidden' name='FC' />");
                $('#book_form').append("<input id='b1' type='hidden' name='B1' />");
                $('#book_form').append("<input id='b2' type='hidden' name='B2' />");
                $('#book_form').append("<input id='b3' type='hidden' name='B3' />");
                $('#book_form').append("<input id='price' type='hidden' name='price' />");
                $('#book_form').append("<input type='button' id='submit_btn' class='pay_button' value='Add To Cart' style='width:200px;' disabled></input>");
            }
            function add_qua_opt(type) {
                for (var i = 0; i < 10; i++) {
                    $('#' + type + '_qua').append("<option value='" + i + "'>" + i + "</option>");
                }
            }
            function add_sel_ent(type) {
                $('#' + type + '_qua').on("change", function () {
                    set_price(type);
                });
            }
            
        /*Select Prices */
            function set_price(type) {
                var price = cal_price(type);
                $('#' + type + '_price').text('$ ' + price.toFixed(2));
            }
            function cal_price(type) {
                var sin_price;
                switch (type) {
                    case 'sa':
                        sin_price = sa_sin_price;
                        break;
                    case 'sp':
                        sin_price = sp_sin_price;
                        break;
                    case 'sc':
                        sin_price = sc_sin_price;
                        break;
                    case 'fa':
                        sin_price = fa_sin_price;
                        break;
                    case 'fc':
                        sin_price = fc_sin_price;
                        break;
                    default: sin_price = b_sin_price;
                }

                var qua = $('#' + type + '_qua').val();
                var price = qua * sin_price;
                switch (type) {
                    case 'sa':
                        sa_price = price;
                        break;
                    case 'sp':
                        sp_price = price;
                        break;
                    case 'sc':
                        sc_price = price;
                        break;
                    case 'fa':
                        fa_price = price;
                        break;
                    case 'fc':
                        fc_price = price;
                        break;
                    case 'b1':
                        b1_price = price;
                        break;
                    case 'b2':
                        b2_price = price;
                        break;
                    default: b3_price = price;
                }
                total_price = cal_total_price();
                $('#total_price').text("$ " + total_price.toFixed(2));
                return price;
            }
            
        /*Calculate total Price*/
            function cal_total_price() {
                total_price = sa_price + sp_price + sc_price + fa_price + fc_price + b1_price + b2_price + b3_price;
				if(total_price !=0)
				{
					$('#submit_btn').removeAttr("disabled");
				}
				else
				{
					$('#submit_btn').attr("disabled","disabled");
				}
                return total_price;
            }
            
        /* Expand and Collapse Functions */
            
        /*A1 Expand*/
                $(document).ready(function () {
                $(document).on('click', '#a1_expand', function () {
					days=new Array(2);
					days[0]=$('#mov1_day1').text();
					days[1]=$('#mov1_day2').text();
                    mov_type = $('#mov1').val();
                    film_name = $('#mov1_title').text();
                    $('#a1_expand').css("display", "none");
                    $("#a1_fold").fadeIn();
                    create_table("table_container1");
                    $('#mov1_des').slideDown();
                    $('#table_container1').slideDown();
                    $("#a2_fold").fadeOut();
                    $('#a2_expand').fadeIn();
                    $('#table_container2').empty();
                    $('#table_container2').css("display", "none");
                    $('#mov2_des').slideUp();
                    $("#a3_fold").fadeOut();
                    $('#a3_expand').fadeIn();
                    $('#table_container3').empty();
                    $('#table_container3').css("display", "none");
                    $('#mov3_des').slideUp();
                    $("#a4_fold").fadeOut();
                    $('#a4_expand').fadeIn();
                    $('#table_container4').empty();
                    $('#table_container4').css("display", "none");
                    $('#mov4_des').slideUp();

                });
                
            /*A1 Fold */    
                $(document).on('click', '#a1_fold', function(){
                    $('#a1_fold').css("display", "none");
                    $('#a1_expand').fadeIn();
                    $('#mov1_des').slideUp();
                    $('#table_container1').slideUp(function () { $('#table_container1').empty() });

                });
                
            /*A2 Expand */
                 $(document).on('click', '#a2_expand', function () {
                    days=new Array(2);
                    days[0]=$('#mov2_day1').text();
                    days[1]=$('#mov2_day2').text();
                    $("#a1_fold").fadeOut();
                    $('#a1_expand').fadeIn();
                    $('#mov1_des').slideUp();
                    $('#table_container1').empty();
                    $('#table_container1').css("display", "none");
                    $("#a3_fold").fadeOut();
                    $('#a3_expand').fadeIn();
                    $('#table_container3').empty();
                    $('#table_container3').css("display", "none");
                    $('#mov3_des').slideUp();
                    $("#a4_fold").fadeOut();
                    $('#a4_expand').fadeIn();
                    $('#table_container4').empty();
                    $('#table_container4').css("display", "none");
                    $('#mov4_des').slideUp();
                    mov_type = $('#mov2').val();
                    film_name = $('#mov2_title').text();
                    $('#a2_expand').css("display", "none");
                    $("#a2_fold").fadeIn();
                    create_table("table_container2");
                    $('#table_container2').slideDown();
                    $('#mov2_des').slideDown();



                });
                
            /* A2 Fold */
                $(document).on('click', '#a2_fold', function () {
                    $('#a2_fold').css("display", "none");
                    $('#a2_expand').fadeIn();
                    $('#table_container2').slideUp(function () { $('#table_container2').empty() });
                    $('#mov2_des').slideUp();

                });
            
                /* A3 Expand */
                    $(document).on('click', '#a3_expand', function () {
					days=new Array(2);
					days[0]=$('#mov3_day1').text();
					days[1]=$('#mov3_day2').text();
                    $("#a1_fold").fadeOut();
                    $('#a1_expand').fadeIn();
                    $('#table_container1').empty();
                    $('#table_container1').css("display", "none");
                    $('#mov1_des').slideUp();
                    $("#a2_fold").fadeOut();
                    $('#a2_expand').fadeIn();
                    $('#table_container2').empty();
                    $('#table_container2').css("display", "none");
                    $('#movw_des').slideUp();
                    $("#a4_fold").fadeOut();
                    $('#a4_expand').fadeIn();
                    $('#table_container4').empty();
                    $('#table_container4').css("display", "none");
                    $('#mov4_des').slideUp();
                    mov_type = $('#mov3').val();
                    film_name = $('#mov3_title').text();
                    $('#a3_expand').css("display", "none");
                    $("#a3_fold").fadeIn();
                    create_table("table_container3");
                    $('#table_container3').slideDown();
                    $('#mov3_des').slideDown();


                });
                
            /* A3 Fold */
            $(document).on('click', '#a3_fold', function () {
                    $('#a3_fold').css("display", "none");
                    $('#a3_expand').fadeIn();
                    $('#table_container3').slideUp(function () { $('#table_container3').empty() });
					$('#mov3_des').slideUp();

                });
                
            /* A4 Expand */
                    $(document).on('click', '#a4_expand', function () {
                                        days=new Array(2);
					days[0]=$('#mov4_day1').text();
					days[1]=$('#mov4_day2').text();
                    $('#a1_expand').fadeIn();
                    $('#table_container1').empty();
                    $('#table_container1').css("display", "none");
                    $('#mov1_des').slideUp();

                    $("#a2_fold").fadeOut();
                    $('#a2_expand').fadeIn();
                    $('#mov2_des').slideUp();

                    $('#table_container2').empty();
                    $('#table_container2').css("display", "none");
                    $("#a3_fold").fadeOut();
                    $('#a3_expand').fadeIn();
                    $('#mov3_des').slideUp();
                    $('#table_container3').empty();
                    $('#table_container3').css("display", "none");
                    mov_type = $('#mov4').val();
                    film_name = $('#mov4_title').text();
                    $('#a4_expand').css("display", "none");
                    $("#a4_fold").fadeIn();
                    create_table("table_container4");
                    $('#table_container4').slideDown();
                    $('#mov4_des').slideDown();
                });
            
            /* A4 Fold */
            $(document).on('click', '#a4_fold', function () {
                    $('#a4_fold').css("display", "none");
                    $('#a4_expand').fadeIn();
                    $('#table_container4').slideUp(function () { $('#table_container4').empty() });
                    $('#mov4_des').slideUp();
                });
                
            /* Submit Functions */
                $(document).on('click', '#submit_btn', function () {                    
                    $('#film').val(film_name);
                    $('#day').val($('#day_sel').val());
                    $('#time').val(time);
                    $('#sa').val((parseInt($('#sa_qua').val()) * 1));
                    $('#sp').val((parseInt($('#sp_qua').val()) * 1));
                    $('#sc').val((parseInt($('#sc_qua').val()) * 1));
                    $('#fa').val((parseInt($('#fa_qua').val()) * 1));
                    $('#fc').val((parseInt($('#fc_qua').val()) * 1));
                    $('#b1').val((parseInt($('#b1_qua').val()) * 1));
                    $('#b2').val((parseInt($('#b2_qua').val()) * 2));
                    $('#b3').val((parseInt($('#b3_qua').val()) * 3));
                    $('#price').val(total_price);
                    //$('#book_form').submit()
                    var day = $('#day_sel').val();
                    var sa = $('#sa_qua').val();
                    var sp = $('#sp_qua').val();
                    var sc = $('#sc_qua').val();
                    var fa = $('#fa_qua').val();
                    var fc = $('#fc_qua').val();
                    var b1 = $('#b1_qua').val();
                    var b2 = $('#b2_qua').val();
                    var b3 = $('#b3_qua').val();
                    
                    // make ajax request to bookingdata page
                    var datastring = "film=" + film_name + "&day=" + day + "&time=" + time +
                            "&sa=" + sa + "&sp=" + sp + "&sc=" + sc + "&fa=" + fa + "&fc=" + fc + "&b1=" + b1
                    + "&b2=" + b2 + "&b3=" + b3 + "&sa_price=" + sa_price + "&sp_price=" + sp_price + "&sc_price=" + sc_price 
                    + "&fa_price=" + fa_price + "&fc_price=" + fc_price + "&b1_price=" + b1_price 
                    + "&b2_price=" + b2_price + "&b3_price=" + b3_price 
                    + "&total=" + total_price;
            
                    $.ajax( {
                    type: "POST",
                    url:  "bookingdata.php",  
                    data: datastring,
                    success:operationSuccess,
                    error: operationError
                    }
                   );  
            
                });
                
               
            });
            
/*Number Formatting */
function changeTwoDecimal_f(x)
{
var f_x = parseFloat(x);
if (isNaN(f_x))
{
alert('function:changeTwoDecimal->parameter error');
return false;
}
var f_x = Math.round(x*100)/100;
var s_x = f_x.toString();
var pos_decimal = s_x.indexOf('.');
if (pos_decimal < 0)
{
pos_decimal = s_x.length;
s_x += '.';
}
while (s_x.length <= pos_decimal + 2)
{
s_x += '0';
}
return s_x;
}

function operationSuccess(response)
 {
      alert(response);
 }
 
  function  operationError(response)
 {
     alert(response);
 }