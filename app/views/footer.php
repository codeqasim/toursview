<!-- loadaing CSS -->
<?php $loading = '<div class="plane-loader"> <div class="cloud cloud1"></div> <div class="cloud cloud4"></div> <div class="cloud cloud3"></div> <div class="plane"></div> <div class="cloud cloud2"></div> <div class="steam steam1"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam2"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam3"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> <div class="steam steam4"> <div class="c1"></div> <div class="c2"></div> <div class="c3"></div> <div class="c4"></div> <div class="c5"></div> <div class="c6"></div> <div class="c7"></div> <div class="c8"></div> <div class="c9"></div> <div class="c10"></div> </div> </div>'; ?>

<?php $dev =1;
if ($dev == 1) {?>
<section class="dev" style="display: none">
<pre class="container">
<code>
<div class="row">
{{location.path}}
<div class="c3"><p><strong>Root URL</strong> {{root}}</p></div>
<div class="c3"><p><strong>Appname</strong> {{appname}}</p></div>
<div class="c3"><p><strong>User Country Code</strong> {{user_country_code}}</p></div>
<div class="c3"><p><strong>User Country</strong> {{user_country}}</p></div>
<div class="c3"><p><strong>User City</strong> {{user_city}}</p></div>
<div class="c3"><p><strong>Default App Language</strong> {{default_language}}</p></div>
<div class="c3"><p><strong>Current Language</strong> {{current_language}}</p></div>
<div class="c3"><p><strong>Default App Currency</strong> {{defualt_currency}}</p></div>
<div class="c3"><p><strong>Current Currency</strong> {{current_currency}}</p></div>
<div class="c3"><p><strong>User Calling Code</strong> {{user_calling_code}}</p></div>
<div class="c3"><p><strong>User Latitude</strong> {{user_latitude}}</p></div>
<div class="c3"><p><strong>User Longitude</strong> {{user_longitude}}</p></div>
<div class="c3"><p><strong>User IP Address</strong> {{user_ip}}</p></div>
<div class="c3"><p><strong>Currencies</strong> <span ng-repeat="currency in currencies"><strong>{{currency.code}}</strong> {{currency.value}} </span></p></div>
</div>
</code>
</pre>
</section>
<?php } ?>

<footer>
    <div class="apps"> 
        <div class="container">
            <div class="row row-rtl">
                <div class="c3 o2-sm">
                    <div class="apps-image">
                        <img class="img-fluid" src="<?=$root;?>assets/img/phones.png">
                    </div>
                </div>
                <div class="c9 o1-sm">
                    <div class="section-info mt-50 rtl-align-right">
                        <h2>Download App &amp; Get the latest offers</h2>
                        <h3>Download app now for easier hotel &amp; flights bookings. Enjoy the best booking experience.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row row-rtl">
                <div class="c6">
                    <h3><strong>APPName</strong> <small>Slogan Goes Here</small></h3>
                    <div class="row links row-rtl">
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>about">about</a></li>
                                <li><a  href="<?=$root;?>careers">careers</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>policy">policy</a></li>
                                <li><a href="<?=$root;?>terms">terms</a></li>
                            </ul>
                        </div>
                        <div class="c4">
                            <ul>
                                <li><a href="<?=$root;?>contact">contact</a></li>
                                <li><a  href="<?=$root;?>faqs"><span >faq</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="c3">
                    <div class="contact">
                        <h3>support </h3>
                        <ul class="rtl-align-right">
                            <li><span class="phone_number">( +123 ) 1122 33 4444</span></li>
                            <li><a class="footer-email" href="">support@travel.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c3">
                    <div class="contact">
                        <h3>social links </h3>
                        <ul class="rtl-align-right">
                        </ul>
                        <ul>
                            <li><a href="">FB</a></li>
                            <li><a href="">TW</a></li>
                            <li><a href="">LI</a></li>
                            <li><a href="">YT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sub-footer">
            <div class="flex items-center row-rtl">
                <a  href="<?=$root;?>" class="mr-10 d-block">
                <img alt="" width="100px" src="<?=$root;?>assets/img/logo.png">
                </a>
                <p class="coy_right">
                    <span>All Rights Reserved &copy;</span>
                    <!--<span class="reserved">  All rights reserved.</span>-->
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?=$root.js;?>jquery/jquery.lazy.min.js"></script>
<script src="<?=$root.js;?>app.js"></script>
<script src="<?=$root.js;?>select2.js"></script>

<!-- layload -->
<script>
$(function() { $('.lazy').lazy({ effect: "fadeIn", effectTime: 200, threshold: 0, }); });
</script>

<!-- select2 init -->
<script>
var $ajax = $("#city");

function formatRepo(t) {
    return t.loading ? t.text : (console.log(t), '<i class="flag ' + t.icon.toLowerCase() + '"></i>' + t.text)
}

function formatRepoSelection(t) {
    return t.text
}
$ajax.select2({
    ajax: {
        url: "<?php echo $root; ?>/app/functions.php",
        dataType: "json",
        data: function(t) {
            return {
                q: $.trim(t.term)
            }
        },
        processResults: function(t) {
            var e = [];
            return t.forEach(function(t) {
                e.push({
                    id: t.id,
                    text: t.text,
                    icon: t.icon
                })
            }), console.log(e), {
                results: e
            }
        },
        cache: !0
    },
    escapeMarkup: function(t) {
        return t
    },
    minimumInputLength: 3,
    templateResult: formatRepo,
    templateSelection: formatRepoSelection,
    dropdownPosition: 'below',
    cache: !0
});
</script>

<script>
$('#category').select2({ placeholder: { id: '1', text: 'Select Category' } }); $('.select2-container').css('width','100%')
</script>

<script>

    //hotel date format
    $(document).ready(function(){
        $('#checkin').datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true
        });
    })

    $(document).ready(function(){
    	$('#checkout').datepicker({
    		dateFormat: 'dd-mm-yy',
    		changeMonth: true,
    		changeYear: true
    	});
    })

    $(document).ready(function(){
      $('#checkindetail').datepicker({
        dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true
      });
    })

    $(document).ready(function(){
      $('#checkoutdetail').datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true
      });
    })

/****hotel list****/
    $("#hotels-list").submit(function() {
    event.preventDefault();
    var city = $('#city').val().toLowerCase();
    var checkin = $('#checkin').val();
    var checkout = $('#checkout').val();
    var language = $('#language').val();
    var currceny = $('#currceny').val(); 
    var pagination = $('#pagination').val(); 
    var adults = $('#adults').val(); 
    var child = $('#childs').val();
    var room = $('#room').val();
    var city_trims = city.split(',').slice(0, 1).join(' ').split(' ').join('-').replace('%40', '@');
    var actionURL = language +'/'+ currceny +'/'+'<?=hotels?>/';
    var finelURL = actionURL + city_trims+'/'+ checkin+'/'+checkout+'/'+adults+'/'+child;
    // alert(city_trims);
    window.location.href = finelURL;
    });
/****end hotel list****/

/****hotel detail****/
    $("#detail-button").click(function() {
    var form = $('#title').val().toLowerCase();
    var id = $('#id').val();
    var checkindetail = $('#checkindetail').val();
    var checkoutdetail = $('#checkoutdetail').val();
    var children = $('#dchildren').val();
    var dadults = $('#dadults').val();
    var dcurrceny = $('#dcurrceny').val();
    var dlanguage = $('#dlanguage').val();
    var slug = form.replace(/\/?,/g, '/').replace(/-+/g, '-').replace(/^-|-$/g, '').split(' ').join('-').replace('%40', '@');
    var actionURL = 'hotel/';
    var actionURL = dlanguage +'/'+ dcurrceny +'/'+'<?=hotel?>/';
    var finelURL = actionURL +id+'/'+ slug+'/'+checkindetail+'/'+checkoutdetail+'/'+dadults+'/'+children;
    // alert(finelURL);
    formsubmit(finelURL);
    });
    function formsubmit(finelURL){
    document.getElementById("detail-button").formAction = finelURL;
    }
/****end hotel detail****/

/**** flights list ****/
    $("#flights-button").click(function() {
    var trip_type = $('input[name=trip]:checked').val();
    var origin = $("#autocomplete").val().toLowerCase();
    var destination = $("#autocomplete2").val().toLowerCase();
    var cdeparture = $("#departure").val();
    var returnn = $("#return").val();
    var flight_type = $("#flight_type").val().toLowerCase();
    var adult = $("#fadults").val();
    var children  = $("#fchilds").val();
    var infant  = $("#finfant").val();
    var language = $('#language').val();
    var currceny = $('#currceny').val();
    var origin_split = origin.split(' ');
    var origin = origin_split[0];
    var destination_split = destination.split(' ');
    var destination = destination_split[0];
    if(origin == ''){
    alert('Please fill out origin');
    $('#autocomplete').focus();
    }else if(destination == ''){
    alert('Please fill out destination');
    $('#autocomplete2').focus();
    }else{
        var actionURL = language +'/'+ currceny +'/'+'<?=flights?>/';
        if (trip_type == 'oneway') {
        var finelURL = actionURL +origin+'/'+destination+'/'+trip_type+'/'+flight_type+'/'+cdeparture+'/'+adult+'/'+children+'/'+infant;
        window.location.href = finelURL;
        }else if(trip_type == 'return'){
        var finelURL = actionURL +origin+'/'+destination+'/'+trip_type+'/'+flight_type+'/'+cdeparture+'/'+returnn+'/'+adult+'/'+children+'/'+infant;
        window.location.href = finelURL;
        }else{
        var finelURL = actionURL +origin+'/'+destination+'/'+cdeparture+'/'+origin+'/'+destination+'/'+cdeparture+'/'+origin+'/'+destination+'/'+cdeparture+'/'+trip_type+'/'+flight_type+'/'+adult+'/'+children+'/'+infant;
        window.location.href = finelURL;
        }
    }

    });
/*end flight list*/
</script>

<!-- flight experiment code by qasim bhai -->
<script>
    var flight_type = 'oneway';
    $("#submit_flights").click(function(){
    var origin = $("#autocomplete").val();
    var destination = $("#autocomplete2").val();
    var cdeparture = $("#departure").val();
    var returnn = $("#return").val();
    var adult = $("#fadult").text();
    var children  = $("#fchildren").text();
    var infant  = $("#finfant").text();
    /*origin & destination validation*/
    if(origin == ''){
    alert('Please fill out origin');
    $('#autocomplete').focus();
    }else if(destination == ''){
    alert('Please fill out destination');
    $('#autocomplete2').focus();
    }else{

    /*(from origin) url settings*/
    var origin_res1 = origin.split(" ",1)[0];

    /*(to destination) url settings*/
    var destination_res1 = destination.split(" ",1)[0];

    /*cdeparture change data format (like 23/03/2020 to 23-03-2020)*/
    var parts = cdeparture.split('/');
    var departur = parts[0] + '-' + parts[1] + '-' + parts[2];

    /*return change data format (like 23/03/2020 to 23-03-2020)*/
    var partss = returnn.split('/');
    var re_turn = partss[0] + '-' + partss[1] + '-' + partss[2];

    /* finally url*/
    var base_url = "<?$root;?>/flights";

    var url = base_url+"flights/"+origin_res1.toLowerCase()+"/"+destination_res1.toLowerCase()+"/"+flight_type+"/"+departur+"/"+re_turn+"/"+adult+"/"+children+"/"+infant;

    window.location.href = url;

    // $.ajax({
    // type: 'ajax',
    // method: 'get',
    // async: false,
    // url: '',
    // data:{
    //     origin_res1:origin_res1,
    //     origin_res2:origin_res2,
    //     destination_res1:destination_res1,
    //     destination_res2:destination_res2,
    //     departur:departur,
    //     re_turn:re_turn,
    //     adult:adult,
    //     children:children
    // },
    // dataType: 'json',
    // success: function(response){
    // alert('Status update successfully');
    // },
    // error: function(){
    // alert('Status update Error');
    // }
    // });
    }
    });

    function FlighType(value){
    flight_type = value;
    }
</script>


	</body>
</html>